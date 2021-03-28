<?php

namespace App\Models;

class Registry
{
    private Storage $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function selectAll(): PersonCollection
    {
        return $this->storage->selectAll();
    }

    public function add(Person $person): void
    {
        $this->storage->add($person);
    }

    public function findPersonBy(string $condition): PersonCollection
    {
        return $this->storage->findPersonBy($condition);
    }

    public function updateDescription(Person $person): void
    {
        $this->storage->updateDescription($person);
    }

}