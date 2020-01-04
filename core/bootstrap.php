<?php

require 'core/Router.php';
require 'core/Request.php';
$config = require 'config.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';


return new QueryBuilder(
    Connection::make($config['database'])
);