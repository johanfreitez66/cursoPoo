<?php

namespace Game\Armors;

use Game\Armor;
use Game\Attack;

class BronzeArmor implements Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }
}
