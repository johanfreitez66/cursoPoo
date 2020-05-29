<?php

namespace Game\Armors;

use Game\Armor;
use Game\Attack;

class SilverArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 3;
    }
}
