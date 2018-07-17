<?php

$users = App::get('database')->selectAll('users');

//dd($tasks);

//die(var_dump($users));

require 'views/index.view.php';