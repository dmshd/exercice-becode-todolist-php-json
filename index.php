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
  include("contenu.php");
   ?>
<section class="page">
   <form class="formulaire" action="index.php" method="post">
   <fieldset>
   <h2>ToDo</h2>
   <input type="checkbox" name="choix1" value="choix1"> Choix 1<br>
   <input type="checkbox" name="choix2" value="choix2"> Choix 2<br>
   <input type="checkbox" name="choix3" value="choix3"> Choix 3<br>
   <br>
   <input type="submit" name="submit" value="Enregistrer">
   </fieldset>


<fieldset>
<h2>ARCHIVE</h2>
   <input type="checkbox" name="choix4" value="choix4"> Choix 4 <br>
   <input type="checkbox" name="choix5" value="choix5"> Choix 5<br>
   <input type="checkbox" name="choix6" value="choix6"> Choix 6<br>
   <input type="checkbox" name="choix7" value="choix7"> Choix 7<br>
</fieldset>





   <fieldset>
     <h2>Ajouter une tâche</h2>
     <input type="text" name="addTask">
     <br><br>
     <input type="submit" value="Ajouter"><br>
     <span class="error"><?php
       echo $taskError;
      ?></span>
   </fieldset>
 </form>
</section>
</body>
</html>
