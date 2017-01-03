<?php
namespace BestPractices\DesignPatterns\Strategy;

class StrategyC implements IStrategy
{
    public function doBehaviour()
    {
        return "Doing behaviour C...";
    }
}