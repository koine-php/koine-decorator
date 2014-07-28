<?php

namespace Dummy;

use Koine\Decorator;

class ProductDecorator extends Decorator
{

    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

    public function getPrice()
    {
        return 'US ' . $this->object->getPrice();
    }
}
