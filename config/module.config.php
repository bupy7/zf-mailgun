<?php

use Bupy7\Mailgun\Service\MailgunService;
use Bupy7\Mailgun\Service\MailgunServiceFactory;
use Bupy7\Mailgun\Options\ModuleOptions;
use Bupy7\Mailgun\Options\ModuleOptionsFactory;

return [
    'mailgun' => [
        // Your API key from Mailgun domain information
        'key' => 'key-example',
    ],
    'service_manager' => [
        'factories' => [
            MailgunService::class => MailgunServiceFactory::class,
            ModuleOptions::class => ModuleOptionsFactory::class,
        ],
    ],
];
