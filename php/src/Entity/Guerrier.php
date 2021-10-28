<?php

class Guerrier extends Player
{
    public function __construct($name)
    {
        $hp = 100;
        $defense = rand(10, 19);
        $attack = rand(20, 40);
        parent::__construct($hp, $defense, $attack, $name);
    }
}