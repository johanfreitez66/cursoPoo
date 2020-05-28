<?php

namespace Game\Weapons;

use Game\Weapon;
use Game\Unit;

class CursedArmor extends Armor
{
    public function absorbDamage(Attack $Attack)
    {
        return $attack->getDamage() * 2;
    }
}
