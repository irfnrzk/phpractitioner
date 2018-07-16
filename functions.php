<?php

// function age_check($val){
//   if ($val >= 21){
//     echo 'allowed';
//   } else{
//     echo 'balik';
//   }
// }


function connectToDb(){
  try{
    return new PDO('mysql:host=127.0.0.1;dbname=mytodos','root','');
  } catch (PDOException $e){
    die('couldn\'t connect');
  }
}

function fetchTask($pdo){
  $statement = $pdo->prepare('select * from todos');
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data){
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
}
