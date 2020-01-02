<?php

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'Goran';

// remove a value from an array
unset($person['age']);

$numbers = [1, 2];
//push to non associative array
$numbers[] = 3;

echo '<pre>';
var_dump($person);
echo '</pre>';

//die('die'); //you can put var_dump inside this function


$task = [
    'title' => 'buy bread',
    'due' => 'today',
    'assigned_to' => 'Goran',
    'completed' => false
];


require 'index.view.php';