<?php

namespace App\Controllers;

class PagesController
{
    public function home(): void
    {
        require __DIR__ . './../Views/index.view.php';
    }
}