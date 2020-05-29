<?php

namespace Game\Armors;

use Game\Armor;
use Game\Attack;

class CursedArmor extends Armor
{
    public function absorbDamage(Attack $Attack)
    {
        return $attack->getDamage() * 2;
    }
}
