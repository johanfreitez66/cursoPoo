<?php

namespace Game\Weapons;

use Game\Weapon;
use Game\Unit;

class BronzeArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }
}
