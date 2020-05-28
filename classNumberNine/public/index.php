<?php

namespace Game;

require '../vendor/autoload.php';

$gamersOne = new Unit('Johan', new Weapons\BasicSword);

$gamersOne->setArmor(new Armors\SilverArmor());

$gamersTwo = new Unit('Mary', new Weapons\FireBow);

$gamersTwo->attack($gamersOne);

$gamersTwo->attack($gamersOne);

$gamersOne->attack($gamersTwo);
