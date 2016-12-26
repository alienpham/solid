<?php
namespace SOLID\OCP;

require_once 'AbstractGuardian.php';

class Gamora extends AbstractGuardian
{
    public function fight()
    {
        echo "\nGamora is fighting!";
    }
}
