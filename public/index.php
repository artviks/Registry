<?php

require "../vendor/autoload.php";

use DB\{QueryBuilder, Connection};
use App\Models\Person;

$config = require "../config.php";

$db = new QueryBuilder(Connection::make($config['database']));
var_dump($db->selectAll('persons', Person::class));
