<?php

namespace App\Models;

interface Storage
{
    public function selectAll(): PersonCollection;

    public function add(Person $person): void;

    public function findPersonBy(string $condition): PersonCollection;

    public function updateDescription(Person $person): void;
}