<?php
namespace SOLID\DesignPatterns\Strategy;

require_once 'IStrategy.php';
require_once 'StrategyA.php';
require_once 'StrategyB.php';
require_once 'StrategyC.php';

class Context
{
    private $_strategy;

    public function getStrategy()
    {
        return $this->_strategy;
    }

    public function setStrategy(IStrategy $strategy)
    {
        $this->_strategy = $strategy;
    }

    public function execute()
    {
        $this->_strategy->doBehaviour();
    }
}

$context = new Context();
$context->setStrategy(new StrategyA());
$context->execute();

$context->setStrategy(new StrategyB());
$context->execute();

$context->setStrategy(new StrategyC());
$context->execute();