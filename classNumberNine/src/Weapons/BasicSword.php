<?php

namespace Game\Weapons;

use Game\Weapon;
use Game\Unit;

class BasicSword extends Weapon
{
    protected $damage = 40;
    protected $description = ":unit ataca con la espada a :opponent";
}
