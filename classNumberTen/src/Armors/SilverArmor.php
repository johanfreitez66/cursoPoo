<?php

namespace Game\Armors;

use Game\Armor;
use Game\Attack;

class SilverArmor implements Armor
{
    public function absorbDamage(Attack $attack)
    {
        if ($attack->isPhysical()) {
            return $attack->getDamage() / 3;
        }

        return $attack->getDamage();
    }
}
