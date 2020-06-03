<?php

require '../vendor/autoload.php';

use Game\User;
use Game\Food;
use Game\LunchBox;

$gordon = new User(['name' => 'Juaquin']);

// Daughter
$joanie = new User(['name' => 'Johan']);

$lunchBox = new LunchBox(['Sandwich', 'Papas', 'Jugo de naranja', 'Manzana']);

$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich', 'beverage' => false]),
    new Food(['name' => 'Papas']),
    new Food(['name' => 'Jugo de naranja', 'beverage' => true]),
    new Food(['name' => 'Manzana']),
    new Food(['name' => 'Agua', 'beverage' => true]),
]);

// House
$joanie->setLunch($lunchBox);

// School
$joanie->eatMeal();


