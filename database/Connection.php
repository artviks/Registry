<?php

namespace DB;

use PDO;
use PDOException;

class Connection
{
    public static function make(array $config): PDO
    {
        try {
            return new PDO (
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}