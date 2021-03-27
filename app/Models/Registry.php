<?php

namespace App\Models;

use DB\QueryBuilder;

class Registry
{
    private QueryBuilder $db;

    public function __construct(QueryBuilder $db)
    {
        $this->db = $db;
    }
}