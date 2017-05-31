<?php

namespace Bupy7\Mailgun\Test;

use Zend\ServiceManager\ServiceManager;

trait SmTrait
{
    /**
     * @param array $config
     * @return ServiceManager
     */
    protected function getSm(array $config = [])
    {
        $config = array_merge_recursive(require __DIR__ . '/../config/module.config.php', $config);
        $sm = new ServiceManager($config['service_manager']);
        $sm->setService('config', $config);
        return $sm;
    }
}
