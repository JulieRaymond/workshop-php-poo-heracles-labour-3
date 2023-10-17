<?php

namespace App;

class Arena
{
    private object $hero;
    private array $monster;
    private int $size = 10;

    public function __construct(object $hero, array $monster, int $size = 10)
    {
        $this->hero = $hero;
        $this->monster = $monster;
        $this->size = $size;
    }

    public function getHero(): object
    {
        return $this->hero;
    }

    public function setHero($hero)
    {
        $this->hero = $hero;
    }

    public function getMonsters(): array
    {
        return $this->monster;
    }

    public function setMonsters($monster)
    {
        $this->monster = $monster;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getDistance(Fighter $fighter1, Fighter $fighter2): float
    {
        $x1 = $fighter1->getX();
        $y1 = $fighter1->getY();
        $x2 = $fighter2->getX();
        $y2 = $fighter2->getY();
        $distance = sqrt(($x2 - $x1) ** 2 + ($y2 - $y1) ** 2);

        return $distance;
    }

    public function touchable(object $attacker, object $attacked): bool
    {
        $distance = $this->getDistance($attacker, $attacked);
        $range = $attacker->getRange();

        return $distance <= $range;
    }
}
