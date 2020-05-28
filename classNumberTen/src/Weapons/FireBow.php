<?php

namespace Game\Weapons;

use Game\Weapon;
use Game\Unit;

class FireBow extends Weapon
{
    protected $damage = 30;
    protected $magical = true;
    protected $description = ':unit dispara una flecha de fuego a :opponent';
}
