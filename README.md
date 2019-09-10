# Buto-Plugin-SlackWebhook_v1

Send message to Slack via Webhook.

## PHP

```
wfPlugin::includeonce('slack/webhook_v1');
$slack_webhook = new PluginSlackWebhook_v1();
$slack_webhook->url = 'https://hooks.slack.com/services/_unik_link_';
$slack_webhook->channel = 'some_group';
$slack_webhook->text = 'Some text...';
$slack_webhook->send();
```
