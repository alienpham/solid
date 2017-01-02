<?php
namespace SOLID\DesignPatterns\Strategy;

require_once 'IStrategy.php';

class StrategyC implements IStrategy
{
    public function doBehaviour()
    {
        echo "Doing behaviour C...";
    }
}