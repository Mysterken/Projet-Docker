<?php
namespace Entity;

class Player
{
    private $hp, $defense, $attack, $name;

    /**
     * @param int $hp
     * @param int $defense
     * @param int $attack
     * @param string $name
     */
    public function __construct(int $hp, int $defense, int $attack, string $name)
    {
        $this->setHp($hp);
        $this->setDefense($defense);
        $this->setAttack($attack);
        $this->setName($name);
    }

    /**
     * @return int
     */
    public function getAttack(): int
    {
        return $this->attack;
    }

    /**
     * @param mixed $attack
     */
    public function setAttack(int $attack)
    {
        $this->attack = $attack;
    }

    /**
     * @return int
     */
    public function getDefense(): int
    {
        return $this->defense;
    }

    /**
     * @param mixed $defense
     */
    public function setDefense(int $defense)
    {
        $this->defense = $defense;
    }

    /**
     * @return int
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * @param mixed $hp
     */
    public function setHp(int $hp)
    {
        $this->hp = $hp;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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