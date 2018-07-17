<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>   
  <ul>
    <li><a href="/about">About</a></li>
    <li><a href="/contact">Contact</a></li>
  </ul>
  <h1>Task</h1>
  <ul>
      <?php foreach ($tasks as $task) : ?>
        <?php if ($task->completed) : ?>
          <strike><li><?= $task->description ?></li></strike>
        <?php else : ?>
          <li><?= $task->description ?></li>
        <?php endif; ?>
      <?php endforeach; ?>
  </ul>
</body>
</html>