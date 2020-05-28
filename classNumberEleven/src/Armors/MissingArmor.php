<?php

namespace Game\Armors;

use Game\Armor;
use Game\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}