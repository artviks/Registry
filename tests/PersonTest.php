<?php

namespace Tests;

use App\Models\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testName(): void
    {
        $person = new Person('A', 'V', '123');
        self::assertEquals('A', $person->name());
    }

    public function testSurname(): void
    {
        $person = new Person('A', 'V', '123');
        self::assertEquals('V', $person->surname());
    }

    public function testCode(): void
    {
        $person = new Person('A', 'V', '123');
        self::assertEquals('123', $person->code());
    }

    public function testDescription(): void
    {
        $person = new Person('A', 'V', '123');
        $person->addDescription('cool');
        self::assertEquals('cool', $person->description());
    }
}