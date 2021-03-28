<?php

require "../vendor/autoload.php";

use App\Models\Registry;
use DB\{QueryBuilder, Connection};

$config = require "../config.php";

$registry = new Registry(new QueryBuilder(Connection::make($config['database']), 'persons'));

var_dump($registry->selectAll());