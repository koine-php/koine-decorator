Koine Decorator
-----------------

Simple decorator base class for PHP.

### Usage

Create an class that extends Koine\Decorator and override only the 
changed methods in there.

```php
<?php
class Product
{
    public function getPrice()
    {
        return 123.99;
    }

    public function getName()
    {
        return "Product Name";
    }
}

class ProductDecorator extends \Koine\Decorator
{
    public function getPrice()
    {
        return 'US ' . $this->object->getPrice();
    }
}

$product   = new Product;
$decorator = new ProductDecorator($product);

$decorator->getName();  // Product Name
$decorator->getPrice(); // US 123.99
```

### Installing

#### Via Composer
Append the lib to your requirements key in your composer.json.

```javascript
{
    // composer.json
    // [..]
    require: {
        // append this line to your requirements
        "koine/decorator": "dev-master"
    }
}
```

### Alternative install
- Learn [composer](https://getcomposer.org). You should not be looking for an alternative install. It is worth the time. Trust me ;-)
- Follow [this set of instructions](#installing-via-composer)

## Issues/Features proposals

[Here](https://github.com/koine/decorator/issues) is the issue tracker.

## Contributing

Only TDD code will be accepted. Please follow the [PSR-2 code standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request

### How to run the tests:

```bash
phpunit --configuration tests/phpunit.xml
```

### To check the code standard run:

```bash
phpcs --standard=PSR2 lib
phpcs --standard=PSR2 tests
```

## Lincense
[MIT](MIT-LICENSE)

## Authors

- [Marcelo Jacobus](https://github.com/mjacobus)
