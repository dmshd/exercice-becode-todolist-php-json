<?php

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>todolist</title>
</head>
<body>
  <form class="formulaire" action="formulaire.php" method="post">
    <fieldset>
      <h2>Ajouter une tâche</h2>
      <label for="addTaskInput">La tâche à effectuer</label><br>
      <input type="text" name="addTask" id="addTaskInput">
      <input type="submit" value="Ajouter">
    </fieldset>
  </form>
</body>
</html>
