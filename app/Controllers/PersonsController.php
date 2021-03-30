<?php

namespace App\Controllers;

use App\Models\Person;
use App\Services\StorePersonService;
use App\Container\Container;

class PersonsController
{
    public function data(): void
    {
        $persons = (new StorePersonService(Container::get('database')))->selectAll();

        require __DIR__ . './../../public/Views/data.view.php';
    }

    public function search(): void
    {
        $persons = (new StorePersonService(
            Container::get('database'))
        )->findPersonBy($_GET['condition']);

        require __DIR__ . './../../public/Views/index.view.php';
    }

    public function add(): void
    {
        (new StorePersonService(Container::get('database')))
            ->add(new Person($_POST['name'], $_POST['surname'], $_POST['code']));

        header('Location:/data');
    }
}