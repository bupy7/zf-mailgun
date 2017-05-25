<?php

use Bupy7\Mailgun\Service\MailgunServiceFactory;
use Bupy7\Mailgun\Options\ModuleOptions;
use Bupy7\Mailgun\Options\ModuleOptionsFactory;

return [
    'mailgun' => [],
    'service_manager' => [
        'factories' => [
            'Bupy7\Mailgun\Service\MailgunService' => MailgunServiceFactory::class,
            ModuleOptions::class => ModuleOptionsFactory::class,
        ],
    ],
];
