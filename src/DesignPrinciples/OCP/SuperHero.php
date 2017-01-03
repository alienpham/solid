<?php
namespace BestPractices\DesignPrinciples\OCP;

class SuperHero
{
    public function fightHero(AbstractGuardian $guardian) {
        $guardian->fight();
    }
}

$superHero = new SuperHero();
$superHero->fightHero(new Gamora());
$superHero->fightHero(new StarLord());