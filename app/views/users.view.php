<?php require('partials/header.php'); ?>

  <?php foreach ($users as $user) : ?>
    <li><?= $user->name ?></li>
  <?php endforeach; ?>
  
  <form method="POST" action="/users">
    <input name="name" type="text"></input> 
    <button>Submit</button>   
  </form>

<?php require('partials/footer.php'); ?>
