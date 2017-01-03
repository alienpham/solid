<?php
namespace BestPractices\DesignPatterns\Strategy;

class StrategyB implements IStrategy
{
    public function doBehaviour()
    {
        return "Doing behaviour B...";
    }
}