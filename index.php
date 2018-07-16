<?php

require 'functions.php';

$query = require 'bootstrap.php';

require 'Task.php';

$tasks = $query->selectAll('todos', 'Task');

dd($tasks);

require 'index.view.php';