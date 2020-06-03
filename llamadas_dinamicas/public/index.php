<?php

use Game\User;

require '../vendor/autoload.php';

$user = new User();

$user->fill([
    'first_name' => 'Johan',
    'last_name' => 'Freitez',
]);

$user->nickname = 'Mary';

unset($user->nickname);

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if (isset ($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>";
}



