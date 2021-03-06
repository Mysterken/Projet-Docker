<?php

include_once 'Player.php';
use Entity\Player;

class Magicien extends Player
{
    /**
     * @param $name
     */
    public function __construct($name)
    {
        $hp = 100;
        $defense = 0;
        $attack = rand(5, 10);
        parent::__construct($hp, $defense, $attack, $name);
    }
}