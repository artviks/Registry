<?php

use App\Controllers\PagesController;
use App\Controllers\RegistryController;

return FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r)
{
    $r->addRoute('GET', '/', [PagesController::class, 'home']);

    $r->addRoute('GET', '/data', [RegistryController::class, 'data']);
    $r->addRoute('GET', '/search', [RegistryController::class, 'search']);
});