# Surmailab

A drupal module for creating new CiviCRM Mailing AB based on chosen survey.

* supported languages:
  * German DE
  * English EN
  * Spanish ES
  * French FR
  * Italian IT
  * Polish PL

## Message templates

The content of email is build from message template, a subject from subject of that template. Message template is choosen for language based on `civicrm_msg_template.workflow_id` = languages.id. Languages has own option group `languages`.

It's possible to use custom tokens in message template.

* `{$survey_url_prefix}` - prefix with required language
* `{$survey_url_alias}` - alias of survey page
* `{$survey_body}` - body of survey

### Example

```html
<p>Hi,</p>

<p><a href="https://www.wemove.eu/{$survey_url_prefix}{$survey_url_alias}">Click here to take the online survey</a></p>

<div>{$survey_body}</div>

<p><a href="https://www.wemove.eu/{$survey_url_prefix}{$survey_url_alias}">Take the online survey!</a></p>

<p>Thank you,<br>
WeMove.EU team</p>
```
