<?php

namespace Bupy7\Mailgun\Test\Options;

use PHPUnit_Framework_TestCase;
use Bupy7\Mailgun\Options\ModuleOptions;
use Bupy7\Mailgun\Test\SmTrait;
use Mailgun\Hydrator\ArrayHydrator;

/**
 * @author Vasily Belosludcev <https://github.com/bupy7>
 */
class ModuleOptionsTest extends PHPUnit_Framework_TestCase
{
    use SmTrait;

    public function testInstance()
    {
        $options = $this->getSm()->get('Bupy7\Mailgun\Options\ModuleOptions');
        $this->assertInstanceOf(ModuleOptions::class, $options);
    }

    public function testGet()
    {
        $options = $this->getSm()->get('Bupy7\Mailgun\Options\ModuleOptions');
        $this->assertNull($options->getHydrator());
        $this->assertFalse($options->getDebug());
        $this->assertNull($options->getEndpoint());
        $this->assertNull($options->getKey());
    }

    public function testSet()
    {
        $options = $this->getSm()->get('Bupy7\Mailgun\Options\ModuleOptions');
        $options->setHydrator(new ArrayHydrator);
        $this->assertInstanceOf(ArrayHydrator::class, $options->getHydrator());
        $options->setEndpoint('http://example.endpoint.com');
        $this->assertEquals('http://example.endpoint.com', $options->getEndpoint());
        $options->setKey('key-example');
        $this->assertEquals('key-example', $options->getKey());
        $options->setDebug(true);
        $this->assertTrue($options->getDebug());
    }

    public function testConfiguration()
    {
        $config = [
            'debug' => true,
            'endpoint' => 'http://example.endpoint.com',
            'key' => 'key-example',
            'hydrator' => ArrayHydrator::class,
        ];
        $options = $this->getSm(['mailgun' => $config])->get('Bupy7\Mailgun\Options\ModuleOptions');
        $this->assertEquals($config['hydrator'], $options->getHydrator());
        $this->assertEquals($config['endpoint'], $options->getEndpoint());
        $this->assertEquals($config['key'], $options->getKey());
        $this->assertEquals($config['debug'], $options->getDebug());
    }  
}
