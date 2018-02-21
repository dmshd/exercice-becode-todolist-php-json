<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>ToDoList</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  include("formulaire.php");

   ?>
<section class="page">
<form action="index.php" method="post">
  <fieldset>
   <h2>ToDo</h2>
    <?php display_todo(); ?>
    <?php include("contenu.php"); ?>
    <input type="submit" name="Enregistrer" value="Enregistrer">
  </fieldset>
  <fieldset>
  <h2>ARCHIVE</h2>
    <?php display_done(); ?>

  </fieldset>
</form>
<form class="formulaire" action="index.php" method="post">
<fieldset>
     <h2>Ajouter une tâche</h2>
     <input type="text" name="addTask">
     <br><br>
     <input type="submit" name="Ajouter" value="Ajouter"><br>
     <span class="error"><?php
       echo $taskError;
      ?></span>
   </fieldset>
 </form>
</section>
</body>
</html>
