<?php

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'Goran';

$numbers = [1, 2];
//push to non associative array
$numbers[] = 3;

require 'index.view.php';