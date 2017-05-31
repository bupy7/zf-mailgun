<?php

namespace Bupy7\Mailgun\Test\Options;

use PHPUnit_Framework_TestCase;
use Mailgun\Mailgun;
use Bupy7\Mailgun\Test\SmTrait;
use Bupy7\Mailgun\Test\Asset\HydratorFactory;

/**
 * @author Vasily Belosludcev <https://github.com/bupy7>
 */
class MailgunServiceTest extends PHPUnit_Framework_TestCase
{
    use SmTrait;

    public function testInstance()
    {
        $mg = $this->getSm()->get('Bupy7\Mailgun\Service\MailgunService');
        $this->assertInstanceOf(Mailgun::class, $mg);
    }

    public function testDevMode()
    {
        $config = [
            'debug' => true,
            'endpoint' => 'http://example.endpoint.com',
        ];
        $this->getSm(['mailgun' => $config])->get('Bupy7\Mailgun\Service\MailgunService');
    }

    public function testProductMode()
    {
        $this->getSm(['mailgun' => ['key' => 'key-example']])->get('Bupy7\Mailgun\Service\MailgunService');
    }

    public function testCustomHydrator()
    {
        $config = [
            'debug' => true,
            'endpoint' => 'http://example.endpoint.com',
            'hydrator' => 'Bupy7\Mailgun\Test\Asset\Hydrator',
        ];
        $this->getSm([
                'mailgun' => $config,
                'service_manager' => [
                    'factories' => [
                        'Bupy7\Mailgun\Test\Asset\Hydrator' => HydratorFactory::class,
                    ],
                ],
            ])
            ->get('Bupy7\Mailgun\Service\MailgunService');
    }
}
