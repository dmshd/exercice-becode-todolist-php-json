<?php

//déclaration des variables
$taskError = "";
$addTask = $_POST["addTask"];
$todoJsonFile = 'todo.json';


//Fonction GoldenP - Sanitization
function GoldenP($a) {
  if (isset($a)) {
  $a = filter_var($a, FILTER_SANITIZE_STRING);
  $a = trim($a);
  $a = stripslashes($a);
  $a = htmlspecialchars($a);
  return $a;
  }
};

//Condition Si vide -> erreur sinon -> résultat sanitizé dans $result et ajouter au JSON
if (empty($_POST["addTask"])) {
  $taskError = "<span class=\"error\">Veuillez entrer une tâche.</span>";
}else {
  $result = GoldenP($addTask);
  file_put_contents($todoJsonFile, $result);
  echo $result;
}

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todolist</title>
</head>
<body>
    <h2>A FAIRE</h2>
    <form class="formulaire" action="formulaire.php" method="post">
    <fieldset>
    <input type="checkbox" name="choix1" value="choix1"> Choix 1<br>
    <input type="checkbox" name="choix2" value="choix2"> Choix 2<br>
    <input type="checkbox" name="choix3" value="choix3"> Choix 3<br>
    <input type="submit" name="submit" value="Enregistrer">
    </fieldset>
    <fieldset>
      <h2>Ajouter une tâche</h2>
      <label for="addTaskInput">La tâche à effectuer</label><br>
      <input type="text" name="addTask" id="addTaskInput">
      <input type="submit" value="Ajouter"><br>
      <?php
        echo $taskError;
       ?>
    </fieldset>
  </form>
</body>
</html>
