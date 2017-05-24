<?php

namespace Bupy7\Mailgun\Options;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * @author Vasily Belosludcev <https://github.com/bupy7>
 */
class ModuleOptionsFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new ModuleOptions($container->get('config')['mailgun']);
    }
}
