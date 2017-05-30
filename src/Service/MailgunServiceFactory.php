<?php

namespace Bupy7\Mailgun\Service;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Mailgun\Mailgun;
use Mailgun\HttpClientConfigurator;
use Mailgun\Hydrator\NoopHydrator;

/**
 * @author Vasily Belosludcev <https://github.com/bupy7>
 */
class MailgunServiceFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return Mailgun
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $configurator = new HttpClientConfigurator;
        $options = $container->get('Bupy7\Mailgun\Options\ModuleOptions');
        $hydrator = $options->getHydrator();
        if ($options->getDebug()) {
            $configurator->setEndpoint($options->getEndpoint());
            $configurator->setDebug(true);
            // https://github.com/mailgun/mailgun-php/issues/359
            if ($hydrator === null) {
                $hydrator = NoopHydrator::class;
            }
        } else {
            $configurator->setApiKey($options->getKey());
        }
        if (is_string($hydrator)) {
            if ($container->has($hydrator)) {
                $hydrator = $container->get($hydrator);
            } else {
                $hydrator = new $hydrator;
            }
        }
        return Mailgun::configure($configurator, $hydrator);
    }
}
