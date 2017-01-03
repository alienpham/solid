<?php
namespace BestPractices\Test\DesignPatterns\Strategy;

use BestPractices\DesignPatterns\Strategy\Context;
use BestPractices\DesignPatterns\Strategy\StrategyA;
use BestPractices\DesignPatterns\Strategy\StrategyB;
use BestPractices\DesignPatterns\Strategy\StrategyC;
use BestPractices\Test\UnitTestCase;

class ContextTest extends UnitTestCase
{
    public function testStrategy()
    {
        $context = new Context();
        $context->setStrategy(new StrategyA());
        $result = $context->execute();
        $this->assertTrue($result == 'Doing behaviour A...');

        $context->setStrategy(new StrategyB());
        $result = $context->execute();
        $this->assertTrue($result == 'Doing behaviour B...');

        $context->setStrategy(new StrategyC());
        $result = $context->execute();
        $this->assertTrue($result == 'Doing behaviour C...');
    }
}