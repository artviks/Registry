<?php

namespace DB;

use App\Models\{Person, PersonCollection, Storage};
use PDO;

class QueryBuilder implements Storage
{
    private PDO $pdo;
    private string $table;

    public function __construct(PDO $pdo, string $table)
    {
        $this->pdo = $pdo;
        $this->table = $table;
    }

    public function selectAll(): PersonCollection
    {
        $sql = "select * from $this->table";

        return $this->getPersonCollection($sql);
    }

    public function add(Person $person): void
    {
        $sql = sprintf(
            "insert into $this->table (
                   name, surname, code, description)
                    values ('%s', '%s', '%s', '%s')",
            $person->name(),
            $person->surname(),
            $person->code(),
            $person->description()
        );

        $this->pdo->exec($sql);
    }

    public function findPersonBy(string $condition): PersonCollection
    {
        $sql = "select * from $this->table where '$condition' in (name, surname, code)";

        return $this->getPersonCollection($sql);
    }

    public function updateDescription(Person $person): void
    {
        $sql = "update $this->table set 
                 description = '{$person->description()}' where id = '{$person->id()}'";

        $this->pdo->exec($sql);
    }

    private function getPersonCollection(string $sql): PersonCollection
    {
        $statement = $this->pdo->query($sql);
        $persons = $statement->fetchAll(PDO::FETCH_ASSOC);

        $col = new PersonCollection();
        foreach ($persons as $person)
        {
            $p = new Person($person['name'], $person['surname'], $person['code'], $person['description']);
            $p->setId($person['id']);
            $col->add($p);
        }

        return $col;
    }
}