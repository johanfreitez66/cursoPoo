<?php

require "../vendor/autoload.php";

use Game\User;

$user = new User([
    'first_name' => 'Juan',
    'last_name' => 'Arango',
    'birthDate' => '07/10/1959',
]);

