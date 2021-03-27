<?php

namespace Tests;

use App\Models\Person;
use App\Models\PersonCollection;
use PHPUnit\Framework\TestCase;

class PersonCollectionTest extends TestCase
{
    public function testAddOne(): void
    {
        $persons = new PersonCollection();
        $persons->add(new Person('A', 'V', '123'));
        self::assertCount(1, $persons->collection());
        self::assertInstanceOf(Person::class, $persons->collection()[0]);
    }

    public function testAddMany(): void
    {
        $persons = new PersonCollection();
        $items = [
            new Person('A', 'V', '123'),
            new Person('J', 'D', '321')
        ];
        $persons->addMany($items);
        $length = count($items);

        self::assertCount($length, $persons->collection());
        foreach ($items as $i => $v) {
            self::assertInstanceOf(Person::class, $persons->collection()[$i]);
        }
    }
}