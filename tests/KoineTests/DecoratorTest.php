<?php

namespace KoineTests;

use PHPUnit_Framework_TestCase;
use Dummy\Product;
use Dummy\ProductDecorator;

class DecoratorTest extends PHPUnit_Framework_TestCase
{
    protected $object;
    protected $product;

    public function setUp()
    {
        $product       = new Product;
        $this->product = $product;
        $this->object  = new ProductDecorator($product);
    }

    public function testGetObject()
    {
        $this->assertSame($this->product, $this->object->getDecoratedObject());
    }

    public function testOptionsDefaultToEmptyHash()
    {
        $this->assertInstanceOf('Koine\Hash', $this->object->getOptions());
    }

    public function testDelegatesToTheObject()
    {
        $this->assertEquals('Product Name', $this->object->getName());
    }

    public function testCanOverrideMethod()
    {
        $this->assertEquals('US 123.99', $this->object->getPrice());
    }
}
