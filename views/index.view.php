<?php require('partials/header.php'); ?>

  <?php foreach ($users as $user) : ?>
    <li><?= $user->name ?></li>
  <?php endforeach; ?>

  <h1>Task</h1>

  <form method="POST" action="/names">
    <input name="name" type="text"></input> 
    <button>Submit</button>   
  </form>

<?php require('partials/footer.php'); ?>
