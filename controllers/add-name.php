<?php

$name = htmlspecialchars($_POST['name']);

if ($app['database']->insertName($name)) {
    echo "Name {$_POST['name']} succefuly inserted into the table";
} else {
    echo "Name failed to insert into the table.";
}

