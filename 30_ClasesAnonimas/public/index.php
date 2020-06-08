<?php

require "../vendor/autoload.php";

use Game\User;

$user = new User([
    'first_name' => 'Walter',
    'last_name' => 'White',
    'birthDate' => '07/09/1959',
]);

