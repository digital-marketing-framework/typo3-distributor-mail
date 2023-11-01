# Introduction

EXT:dmf_distributor_mail is providing a destination for EXT:dmf_distributor_core, which handles form submissions for various endpoints.

It will send the form data via email.

# Setup

All basic settings, explained in EXT:dmf_distributor_core, (including the overwrite mechanics) apply to this extension as well.

## Subject

Sets the message subject  
Default: 'New Form Submission'

## Sender

Set the sender for this message.  
Default: ''

## Recipents

Set the list of recipents for this message.  
Default: ''

## Reply to

Set the reply to receiver for this message.  
Default: ''

## Include Attachments In Mail

If checked attachments are attached to the message, if not a link will be provided in the message.  
Default: `false`

## Template (Plain Text)

Customize the plain text template for this message  
Default:

```twig
{% for key,value in all_values %}
    {{ key }}: {{ value }}
{% endfor %}
```

## Use Html

If checked it is possible to use the html template  
Default: `false`

## Template (HTML)

Customize the html template for this message  
Default:

```twig
<table>
    <tr>
        <td>Key</td>
        <td>Value</td>
    </tr>
    {% for key,value in all_values %}
        <tr>
            <td>{{ key }}</td>
            <td>{{ value }}</td>
        </tr>
    {% endfor %}
</table>
```
