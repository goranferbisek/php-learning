<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));


/* if we had multiple functions it would be wise
   to make a helpers.php file for helpers functions
*/


function view($name, $data = [])
{
    extract($data); // reverse of the compact() function

    return require "views/{$name}.view.php";
}

function redirect($path) {
    header("Location: /{$path}");
}