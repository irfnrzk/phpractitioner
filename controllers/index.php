<?php

$users = $app['database']->selectAll('users', 'Task');

//dd($tasks);

require 'views/index.view.php';