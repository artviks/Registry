<?php

namespace App\Controllers;

use App\Models\Registry;
use Core\App;

class RegistryController
{
    public function data(): void
    {
        $persons = (new Registry(App::get('database')))->selectAll();

        require __DIR__ . './../Views/data.view.php';
    }

    public function search(): void
    {
        $persons = (new Registry(
            App::get('database'))
        )->findPersonBy($_GET['condition']);

        require __DIR__ . './../Views/index.view.php';
    }
}