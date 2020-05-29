<?php

namespace Styde;

require '../vendor/autoload.php';

Translator::set([
    'BasicBowAttack' => ':unit dispara una flecha :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
]);

$gamersOne = Unit::createSoldier()
            ->setWeapon(new Weapons\BasicSword())
            ->setArmor(new Armors\SilverArmor())
            ->setShield();

$gamersTwo = new Unit('Mary', new Weapons\FireBow);

$gamersTwo->attack($gamersOne);

$gamersTwo->attack($gamersOne);

$gamersOne->attack($gamersTwo);
