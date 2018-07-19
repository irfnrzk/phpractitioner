<?php

require 'vendor/autoload.php';
require 'core/functions.php';
//require 'Task.php';

require 'core/bootstrap.php';

use App\Core\{Router, Request};

// $router = new Router;
// require 'routes.php';
// require $router->direct($uri);

$router = Router::load('app/routes.php');
$router->direct(Request::uri(), Request::method());