<?php

namespace Bupy7\Mailgun\Options;

use Zend\Stdlib\AbstractOptions;

/**
 * @author Vasily Belosludcev <https://github.com/bupy7>
 */
class ModuleOptions extends AbstractOptions
{
    /**
     * @var string|null API key.
     * @see https://github.com/mailgun/mailgun-php#usage
     */
    protected $key;
    /**
     * @var boolean Enable or disable debugging Mailgun.
     * @see https://github.com/mailgun/mailgun-php#debugging
     */
    protected $debug = false;
    /**
     * @var string|null Postbin a special URL for debugging.
     * @see https://github.com/mailgun/mailgun-php#debugging
     */
    protected $endpoint;
    /**
<<<<<<< HEAD
     * @var string|Hydrator|null Hydrator class for API response.
=======
     * @var string Response class hydrator. Class must be instance of `Mailgun\Hydrator\Hydrator` or
     * `Zend\ServiceManager\Factory\FactoryInterface` or alias of class service. By default is
     * `Mailgun\Hydrator\ModelHydrator`.
>>>>>>> origin/master
     */
    protected $hydrator;

    /**
     * @param string $key
     * @return static
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param boolean $debug
     * @return static
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * @param string|null $endpoint
     * @return static
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
<<<<<<< HEAD
     * @param string|Hydrator|null $hydrator
=======
     * @param string|null $hydrator
>>>>>>> origin/master
     * @return static
     */
    public function setHydrator($hydrator)
    {
        $this->hydrator = $hydrator;
        return $this;
    }

    /**
<<<<<<< HEAD
     * @return string|Hydrator|null
=======
     * @return string|null
>>>>>>> origin/master
     */
    public function getHydrator()
    {
        return $this->hydrator;
    }
}
