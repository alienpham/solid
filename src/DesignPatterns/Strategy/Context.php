<?php
namespace BestPractices\DesignPatterns\Strategy;

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
        return $this->_strategy->doBehaviour();
    }
}