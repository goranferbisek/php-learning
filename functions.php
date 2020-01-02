<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function isOldEnough($age) {
    return $age < 21;
}