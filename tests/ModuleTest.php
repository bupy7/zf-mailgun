<?php

namespace Bupy7\Mailgun\Test;

use PHPUnit_Framework_TestCase;
use Zend\Test\Util\ModuleLoader;
use Bupy7\Mailgun\Module;

/**
 * @author Belosludcev Vasily <https://github.com/bupy7>
 */
class ModuleTest extends PHPUnit_Framework_TestCase
{
    public function testLoader()
    {
        $moduleLoader = new ModuleLoader([
            'modules' => [
                'Zend\Router',
                'Bupy7\Mailgun',
            ],
            'module_listener_options' => [
                'module_paths' => [
                    __DIR__ . '/../src'
                ],
                'config_cache_enabled' => false,
                'module_map_cache_enabled' => false,
                'check_dependencies' => true,
            ],
        ]);
        $this->assertInstanceOf(Module::class, $moduleLoader->getModule('Bupy7\Mailgun'));
    }
}
