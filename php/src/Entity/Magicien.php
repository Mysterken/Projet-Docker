<?php

class Magicien extends Player
{
    public function __construct($name)
    {
        $hp = 100;
        $defense = 0;
        $attack = rand(5, 10);
        parent::__construct($hp, $defense, $attack, $name);
    }
}