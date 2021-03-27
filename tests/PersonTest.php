<?php

namespace Tests;

use App\Models\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testName(): void
    {
        $person = new Person;
        $person->setName('A');
        self::assertEquals('A', $person->name());
    }

    public function testSurname(): void
    {
        $person = new Person;
        $person->setSurname('V');
        self::assertEquals('V', $person->surname());
    }

    public function testCode(): void
    {
        $person = new Person;
        $person->setCode('123');
        self::assertEquals('123', $person->code());
    }

    public function testDescription(): void
    {
        $person = new Person;
        $person->setDescription('cool');
        self::assertEquals('cool', $person->description());
    }
}