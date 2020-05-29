<?php

namespace Game\Armors;

use Game\Armor;
use Game\Attack;

class BronzeArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }
}
