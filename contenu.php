<?php

ini_set('display_errors', 1); // afficher les erreurs php dans le navigateur à remettre en commentaire ou supprimer quand tout c'est fini.

$json = file_get_contents('todo.json');
$json = json_decode($json, true);
$taskNbr = array();

  if (!empty($_POST['todo'])) {
  foreach ($_POST['todo'] as $value) {

    $taskNbr[] = $value;
  }
  GoldenDebug($taskNbr);
}

?>
