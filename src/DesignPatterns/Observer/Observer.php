<?php
namespace BestPractices\DesignPatterns\Observer;

interface Observer
{
    public function update(Subject $sender);
}