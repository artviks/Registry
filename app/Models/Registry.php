<?php

namespace App\Models;

class Registry
{
    private PersonCollection $persons;

    public function __construct(PersonCollection $persons)
    {
        $this->persons = $persons;
    }

    public function getPersons(): PersonCollection
    {
        return $this->persons;
    }
}