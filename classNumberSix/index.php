<?php

namespace Game;

require 'src/helpers.php';
require 'vendor/Armor.php';

spl_autoload_register(function ($className) {
    show("Intentando cargar $className");

    if (strpos($className, 'Game\\') === 0) {
        $className = str_replace('Game\\', '', $className);

        if (file_exists("src/$className.php")) {
            require "src/$className.php";
        }
    }
});

$armor = new BronzeArmor();

$gamerOne = new Soldier('Johan');

$gamerTwo = new Archer('Mary');
//$gamerTwo->move('el norte');
$gamerTwo->attack($gamerOne);

$gamerOne->setArmor(new CursedArmor);

$gamerTwo->attack($gamerOne);

$gamerOne->attack($gamerTwo);
