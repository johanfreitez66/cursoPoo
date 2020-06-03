<?php

require '../vendor/autoload.php';

use Game\User;
use Game\LunchBox;

$gordon = new User(['name' => 'Johan']);

// Daughter
$joanie = new User(['name' => 'Juan']);

$lunchBox = new LunchBox(['Sandwich', 'Papas', 'Jugo de naranja', 'Manzana']);

// House
$joanie->setLunch($lunchBox);

// School
$joanie->eatMeal();


