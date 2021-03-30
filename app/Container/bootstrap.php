<?php

use App\Container\Container;
use App\Repositories\Database\{MySQLPersonRepository, Connection};

Container::bind('config', require __DIR__ . './../../config.php');
Container::bind('database', new MySQLPersonRepository(
    Connection::make(Container::get('config')['database']),
    'persons'
));