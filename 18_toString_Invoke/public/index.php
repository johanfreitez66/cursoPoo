<?php

use Game\HtmlNode;

require '../vendor/autoload.php';

$node = HtmlNode::textarea('Game')
    ->name('content')
    ->id('contenido');

var_dump($node('name'), $node('width', 100));