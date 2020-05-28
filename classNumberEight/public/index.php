<?php

namespace Styde;

require '../vendor/autoload.php';

$gamerOne = new Soldier('Johan', new Weapons\BasicSword);

$gamerOne->setArmor(new Armors\BronzeArmor());

$gamerTwo = new Archer('Mary', new Weapons\CrossBow);

$gamerTwo->attack($gamerOne);

$gamerTwo->attack($gamerOne);
//
$gamerOne->attack($gamerTwo);
