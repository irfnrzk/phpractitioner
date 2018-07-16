<?php

// function age_check($val){
//   if ($val >= 21){
//     echo 'allowed';
//   } else{
//     echo 'balik';
//   }
// }

// function fetchTask($pdo){
//   $statement = $pdo->prepare('select * from todos');
//   $statement->execute();
//   return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
// }

function dd($data){
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
}
