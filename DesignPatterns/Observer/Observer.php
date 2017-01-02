<?php
namespace SOLID\DesignPatterns\Observer;

require_once 'Subject.php';

interface Observer
{
    public function update(Subject $sender);
}