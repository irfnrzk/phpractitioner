<?php

require 'functions.php';

// class Task {
//   public $description;
//   public $completed = false;
  
//   public function __construct($description){
//     $this->description = $description;
//   }

//   public function isComplete(){
//     return $this->completed;
//   }

//   public function complete(){
//     $this->completed = true;
//   }
// }

// $tasks = [
//   new Task('Go to the store'),
//   new Task('finish my hw'),
//   new Task('clean toilet')
// ];

// $tasks[0]->complete();
// $task = new Task('Go to the store');
// $task->complete();
// dd($tasks);

$query = require 'bootstrap.php';
require 'Task.php';



$tasks = $query->selectAll('todos', 'Task');

//$tasks = fetchTask($pdo);
dd($tasks);
//dd($results);

require 'index.view.php';