<?php

require "../vendor/autoload.php";
require "../core/bootstrap.php";

use Core\FastRouter;


FastRouter::load(require '../app/routes.php');