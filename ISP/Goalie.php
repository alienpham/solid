<?php
namespace SOLID\ISP;

require_once 'GoalkeepingInterface.php';
require_once 'PlayingInterface.php';

class Goalie implements GoalkeepingInterface, PlayingInterface
{
    public function run()
    {
        // TODO: Implement run() method.
    }

    public function catchBall()
    {
        // TODO: Implement catchBall() method.
    }
}