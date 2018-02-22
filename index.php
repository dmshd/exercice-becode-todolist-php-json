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
  <section class="page">
    <h1>Todo List</h1>
		<form class="archiver" action="index.php" method="post">
			<?php
				include("formulaire.php");
			?>
			<h2>ToDo</h2>
			<?php display_todo(); ?>
      <?php include("contenu.php"); ?>
      <br>
      <input class="bouton" type="submit" name="Enregistrer" value="Enregistrer">
    </form>
        <div class="archive">
      <h2>Archive</h2>
        <?php display_done(); ?>
</div>
		
		<form class="ajouter" action="index.php" method="post">
		<h2>Ajouter une tâche</h2>
		<input type="text" name="addTask">
		<br><br>
		<input class="bouton" type="submit" name="Ajouter" value="Ajouter"><br>
		<span class="error">
      <?php
			echo $taskError;
      ?>
      </span>
    </form>
</section>
<footer>
  <h3> &copy; <a href="https://github.com/dmshd">Daniel</a> et <a href="https://github.com/geocani">Geoffrey</a> 2018 - 2019</h3>
</footer>
	</body>
</html>