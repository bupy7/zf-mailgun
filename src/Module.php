<?php

namespace Bupy7\Mailgun;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * @author Vasily Belosludcev <https://github.com/bupy7>
 */
class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
