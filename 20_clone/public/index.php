<?php

require '../vendor/autoload.php';

use Game\User;
use Game\LunchBox;

$gordon = new User(['name' => 'Johan']);

// Daughters
$joanie = new User(['name' => 'José']);

$haley = new User(['name' => 'Maikel']);

$lunchBox = new LunchBox(['Santiago']);

$lunchBox2 = clone($lunchBox);

// House
$joanie->setLunch($lunchBox);

$haley->setLunch($lunchBox2);

// School
// ...
$joanie->eat();

$haley->eat();

var_dump($lunchBox, $lunchBox2);




