<?php

namespace Game\Weapons;

use Game\Weapon;
use Game\Unit;

class CrossBow extends Weapon
{
    protected $damage = 40;
    protected $description = ':unit dispara una flecha a :opponent';
}
