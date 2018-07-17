<?php

App::bind('config', require 'config.php'); 


$pdo = Connection::make(App::get('config')['database']);

App::bind('database', new QueryBuilder($pdo));