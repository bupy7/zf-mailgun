zf-mailgun
==========

It's simply wrapper module for Zend Framework 3.

Installation
------------

The preferred way to install this extension is through composer.

Either run

```
$ php composer.phar require bupy7/zf-mailgun "*"
```

or add

```
"bupy7/zf-mailgun": "*"
```

to the require section of your composer.json file.

Usage
-----

**You should add module to your list modules:**

```php
[
    'modules' => [
        ...
    
        'Bupy7\Mailgun',
        
        ...
    ],
]
```

**You should add cofiguration to you local config file:**

```php
'mailgun' => [
    'key' => 'key-example',
    'endpoint' => 'http://bin.mailgun.net/example',
    'debug' => false,
]
```

**Now, you can send a message:**

```php
$mg = $container->get('Bupy7\Mailgun\MailgunService');
$mg->messages()->->send('example.com', [
  'from'    => 'bob@example.com', 
  'to'      => 'sally@example.com', 
  'subject' => 'The PHP SDK is awesome!', 
  'text'    => 'It is so simple to send a message.'
]);
```

> More info in `Bupy7\Mailgun\Options\ModuleOptions`.

License
-------

zf-mailgun is released under the BSD-3-Clause License.
