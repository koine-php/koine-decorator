<?php

namespace Koine;

use PO\Hash;
use PO\Object;

class Decorator extends Object
{
    /**
     * @var mixed
     */
    protected $object;

    /**
     * @var Hash
     */
    protected $options;

    /**
     * Constructor
     *
     * @param mixed $object
     * @param array $options
     */
    public function __construct($object, $options = array())
    {
        $this->object = $object;
        $this->options = new Hash($options);
    }

    /**
     * Get the Decorated Object
     *
     * @return mixed
     */
    public function getDecoratedObject()
    {
        return $this->object;
    }

    /**
     * Get the options
     *
     * @return Hash
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Delegates the missing method to the decorated object
     *
     * @param  string $method
     * @param array arguments
     * @return mixed
     */
    public function methodMissing($method, $arguments = array())
    {
        return call_user_func_array(array($this->object, $method), $arguments);
    }
}
