<?php

App::get('database')->insert('users', [
    'name' => htmlspecialchars($_POST['name'])
]);

//redirect to homepage
header('Location: /');