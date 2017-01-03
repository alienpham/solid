<?php
namespace BestPractices\DesignPrinciples\LSP;

final class LspTest
{
    private static function factory()
    {
        return new Square();
    }

    public static function test()
    {
        $rectangle = static::factory();
        $rectangle->setWidth(5);
        $rectangle->setHeight(10);

        echo $rectangle->getArea();
    }
}

LspTest::test();