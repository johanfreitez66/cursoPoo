<?php

namespace Game;

require '../vendor/autoload.php';

Translator::set([
    'BasicBowAttack' => ':unit dispara una flecha :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
]);

$gamersOne = new Unit('gamersOne', new Weapons\BasicSword);

//$gamersOne->setArmor(new Armors\SilverArmor());

$gamersTwo = new Unit('gamersTwo', new Weapons\FireBow);

$gamersTwo->attack($gamersOne);

$gamersTwo->attack($gamersOne);

$gamersOne->attack($gamersTwo);
