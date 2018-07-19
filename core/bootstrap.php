<?php

use App\Core\App;

App::bind('config', require 'config.php'); 

$pdo = Connection::make(App::get('config')['database']);

App::bind('database', new QueryBuilder($pdo));

function view($name, $data = []){

  extract($data);

  return require "app/views/{$name}.view.php";

}

function redirect($path){

  header("Location: /{$path}");

}