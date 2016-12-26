<?php
namespace SOLID\OCP;

require_once 'Gamora.php';
require_once 'StarLord.php';

class SuperHero
{
    public function fightHero(AbstractGuardian $guardian) {
        $guardian->fight();
    }
}

$superHero = new SuperHero();
$superHero->fightHero(new Gamora());
$superHero->fightHero(new StarLord());