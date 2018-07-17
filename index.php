<?php

require 'core/functions.php';
//require 'Task.php';

$query = require 'core/bootstrap.php';

// $router = new Router;
// require 'routes.php';
// require $router->direct($uri);

$router = Router::load('routes.php');
require $router->direct(Request::uri());