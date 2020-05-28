<?php

namespace Game\Weapons;

use Game\Weapon;
use Game\Unit;

class BasicBow extends Weapon
{
    protected $damage = 20;
    protected $description = ':unit dispara una flecha :opponent';
}
