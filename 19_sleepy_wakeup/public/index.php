<?php

require '../vendor/autoload.php';

use Game\User;

$user = new User(['name' => 'Johan', 'email' => 'johanfreitez66@gmail.com']);

$user->id = 10;

echo $result = serialize($user);

file_put_contents('../storage/user.txt', $result);