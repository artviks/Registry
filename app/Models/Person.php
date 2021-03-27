<?php

namespace App\Models;

class Person
{
    private string $name;
    private string $surname;
    private string $code;
    private string $description;

    public function __construct(string $name, string $surname, string $code)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->code = $code;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function surname(): string
    {
        return $this->surname;
    }

    public function code(): string
    {
        return $this->code;
    }

    public function addDescription(string $description): void
    {
        $this->description = $description;
    }

    public function description(): string
    {
        return $this->description;
    }
}