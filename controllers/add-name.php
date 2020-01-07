<?php

$app['database']->insert('users', [
    'name' => $_POST['name']
]);

//redirect to homepage
header('Location: /');