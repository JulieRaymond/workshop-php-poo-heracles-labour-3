<?php

namespace App;

class Weapon
{
    private float $range = 0.5;
    private int $damage = 10;
    private string $image = 'sword.svg';

    public function __construct(float $range, int $damage, string $image)
    {
        $this->range = $range;
        $this->damage = $damage;
        $this->image = $image;
    }

    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getRange(): float
    {
        return $this->range;
    }
}
