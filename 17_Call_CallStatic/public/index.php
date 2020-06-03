<?php

use Game\HtmlNode;

require '../vendor/autoload.php';

$node = HtmlNode::textarea('Esto es una prueba Exitosa de Call')
    ->name('content')
    ->id('contenido');

$node = new HtmlNode('textarea', 'Game', ['name' => 'content', 'id' => 'contenido']);

echo $node->render();

