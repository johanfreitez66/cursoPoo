<?php

namespace Game;

require '../vendor/autoload.php';

$armor = new Armors\BronzeArmor();

$gamerOne = new Soldier('Johan');

$gamerTwo = new Archer('Mary');
$gamerTwo->move('norte, He Intenta huir');

$gamerTwo->attack($gamerOne);

$gamerOne->setArmor(new Armors\CursedArmor);
$gamerTwo->setArmor($armor);

$gamerTwo->attack($gamerOne);

$gamerOne->attack($gamerTwo);
