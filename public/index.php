<?php

require "../vendor/autoload.php";
require "../app/Container/bootstrap.php";

use App\FastRouter;


FastRouter::load(require '../app/routes.php');