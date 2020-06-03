<?php

require "../vendor/autoload.php";

use Game\User;

$user = new User([
    'name' => 'Johan Freitez',
    'birthDate' => '11/03/1992',
]);

echo "<p>{$user->name} tiene {$user->age} años";