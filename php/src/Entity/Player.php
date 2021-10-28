<?php

class Player
{
    private $hp, $defense, $attack;

    public function __construct($hp, $defense, $attack)
    {
        $this->hp = $hp;
        $this->defense = $defense;
        $this->attack = $attack;
    }

    /**
     * @return mixed
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @param mixed $attack
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    /**
     * @return mixed
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param mixed $defense
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @param mixed $hp
     */
    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    /**
     * @param Player $player
     * @return bool
     */
    public function attackPlayer(Player $player)
    {
        $damage = $this->getAttack() - $player->getDefense();

        if ($damage > 0) {
            $player->setHp($player->getHp() -  $damage);
            return true;
        }
        return false;
    }
}