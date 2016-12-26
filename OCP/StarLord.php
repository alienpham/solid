<?php
namespace SOLID\OCP;

require_once 'AbstractGuardian.php';

class StarLord extends AbstractGuardian
{
    public function fight()
    {
        echo "\nStar Lord is fighting!";
    }
}
