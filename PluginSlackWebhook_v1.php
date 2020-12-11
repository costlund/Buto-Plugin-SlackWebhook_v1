<?php
class PluginSlackWebhook_v1{
  public $url = null;
  public $channel = null;
  public $text = null;
  public $icon_emoji = ':red_card:';
  public function send(){
    /**
     * Replace.
     */
    $this->handel_text();
    /**
     * 
     */
    $data = "payload=" . json_encode(array(
            "channel"       =>  "#{$this->channel}",
            "text"          =>  $this->text,
            "icon_emoji"    =>  $this->icon_emoji
        ));
    $ch = curl_init($this->url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }
  private function handel_text(){
    $this->text = str_replace('&', '[AND]', $this->text);
    return null;
  }
}