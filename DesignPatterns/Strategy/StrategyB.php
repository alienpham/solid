<?php
namespace SOLID\DesignPatterns\Strategy;

require_once 'IStrategy.php';

class StrategyB implements IStrategy
{
    public function doBehaviour()
    {
        echo "Doing behaviour B...";
    }
}