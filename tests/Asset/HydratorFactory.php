<?php

namespace Bupy7\Mailgun\Test\Asset;

use Mailgun\Hydrator\NoopHydrator;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * @author Vasily Belosludcev <https://github.com/bupy7>
 */
class HydratorFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return NoopHydrator
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new NoopHydrator;
    }
}
