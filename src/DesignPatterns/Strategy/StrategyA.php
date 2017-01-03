<?php
namespace BestPractices\DesignPatterns\Strategy;

class StrategyA implements IStrategy
{
    public function doBehaviour()
    {
        return "Doing behaviour A...";
    }
}