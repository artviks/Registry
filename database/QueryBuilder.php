<?php

namespace DB;

use App\Models\Person;
use PDO;

class QueryBuilder
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll(string $table, string $intoClass): array
    {
        $statement = $this->pdo->query("select * from $table");

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function addPerson(Person $person): void
    {
        $sql = sprintf(
            "insert into persons values ('%s', '%s', '%s', '%s')",
            $person->name(),
            $person->surname(),
            $person->code(),
            $person->description()
        );

        $this->pdo->exec($sql);
    }

    public function findByCode(string $table, string $code): Person
    {
        $statement = $this->pdo->query("select * from $table where code = '$code'");

        return $statement->fetchObject(Person::class);
    }




}