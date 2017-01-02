<?php
namespace SOLID\DesignPatterns\Factory;

class ProductFactory
{
    public static function factory($id)
    {
        return new ConcreteProduct($id);
    }
}

# $product = ProductFactory::factory(99);
# echo $product->makeIt();