<?php
ini_set('display_errors', 1); // afficher les erreurs php dans le navigateur

//déclaration des variables
$taskError = ""; //initialisation de la variable erreur en lui assignant une chaine de caractère vide (optionnel ?)

//Fonction GoldenP - Sanitization
function sanitize($a) {
  $a = filter_var($a, FILTER_SANITIZE_STRING); // filter_var — Filtre une variable avec un filtre spécifique -- FILTER_SANITIZE_STRING Supprime tous les tags HTML
  $a = trim($a); // trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
  $a = stripslashes($a); // stripslashes — Supprime les antislashs d'une chaîne
  $a = htmlspecialchars($a); //htmlspecialchars — Convertit les caractères spéciaux en entités HTML
  return $a;
}

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) { // $_SERVER est un tableau contenant des informations comme les en-têtes, dossiers et chemins du script -- REQUEST_METHOD Méthode de requête utilisée pour accéder à la page;
  if (empty($_POST["addTask"])) { // si le champs input ayant pour valeur addTask, est vide alors ...
  $taskError = "Veuillez entrer une tâche."; // Assignation du message d'erreur à la varialbe $teskError
  }else {
  $addTask = $_POST["addTask"]; // Récupération du message envoyé par le formulaire et placement dans la variable $addTask
  $todo = array(); // initialisation d'un tableau php
  $todo["tache"] = $addTask; // ajout de la clé tache dont la valeur est la tâche récupérée plus haut
  $todo["fait"] = false; // ajout de la clé "fait" dont la valeur est faux par défaut
  $json = file_get_contents('todo.json'); // récupération du contenu brut du json et placement dans une variable
  $json = json_decode($json, true); // décodage du contenu de la variable
  $json[] = $todo; // Ajout du tableau temporaire $todo contenant la "tache" et le "fait => false par defaut" à la suite des précédents tableaux contenant chacun les taches précédement encodées dans le JSON
  $json = json_encode($json); //réencodage au format JSON
  file_put_contents('todo.json', $json); // Tout fourrer dans le fichier todo.json
  }
}



 ?>
