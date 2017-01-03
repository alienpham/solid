<?php
namespace BestPractices\DesignPrinciples\ISP\ViolatedISP;

interface PlayingInterface
{
    public function run();
    public function shoot();
    public function catchBall();
}