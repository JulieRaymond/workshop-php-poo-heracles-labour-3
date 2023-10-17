<?php

namespace App;

use App\Shield;
use App\Weapon;

class Hero extends Fighter
{
    private ?Weapon $weapon = null;
    private ?Shield $shield = null;

    public function getWeapon(): ?Weapon
    {
        return $this->weapon;
    }

    public function setWeapon(?Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function getShield(): ?Shield
    {
        return $this->shield;
    }

    public function setShield(?Shield $shield): void
    {
        $this->shield = $shield;
    }

    public function getDamage(): int
    {
        $damage = $this->getStrength();
        if ($this->getWeapon() !== null) {
            $damage += $this->getWeapon()->getDamage();
        }
        return $damage;
    }

    public function getDefense(): int
    {
        $defense = $this->getDexterity();
        if ($this->getShield() !== null) {
            $defense += $this->getShield()->getProtection();
        }

        return $defense;
    }

    public function getRange(): float
    {
        $baseRange = parent::getRange();
        if ($this->getWeapon() !== null) {
            $weaponRange = $this->getWeapon()->getRange();
            return $baseRange + $weaponRange;
        }

        return $baseRange;
    }
}
