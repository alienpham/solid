<?php
namespace SOLID\DesignPatterns\Strategy;

require_once 'IStrategy.php';

class StrategyA implements IStrategy
{
    public function doBehaviour()
    {
        echo "Doing behaviour A...";
    }
}