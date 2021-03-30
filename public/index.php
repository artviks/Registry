<?php

require "../vendor/autoload.php";

use App\FastRouter;


$container = require "../app/bootstrap.php";

FastRouter::load(require '../app/routes.php', $container);