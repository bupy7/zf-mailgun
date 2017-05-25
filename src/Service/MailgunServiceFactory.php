<?php

namespace Bupy7\Mailgun\Service;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Mailgun\Mailgun;
use Mailgun\HttpClientConfigurator;

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
        if ($options->getDebug()) {
            $configurator->setEndpoint($options->getEndpoint());
            $configurator->setDebug(true);
        } else {
            $configurator->setApiKey($options->getKey());
        }
        return Mailgun::configure($configurator);
    }
}
