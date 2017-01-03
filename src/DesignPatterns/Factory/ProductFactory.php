<?php
namespace BestPractices\DesignPatterns\Factory;

class ProductFactory
{
    public static function factory($id)
    {
        return new ConcreteProduct($id);
    }
}