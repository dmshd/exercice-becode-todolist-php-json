<?php
ini_set('display_errors', 1); // afficher les erreurs php dans le navigateur à remettre en commentaire ou supprimer quand tout c'est fini.

<<<<<<< HEAD
//  Homemade Debugging tool
function GoldenPrint($key) {
  echo "<pre>";
  print_r($key);
  echo "</pre>";
}
=======

function isExist($var){
    if (isset($var)){
    }
  };

function GoldenP($a) {
  if (isset($a)) {
  $a = filter_var($a, FILTER_SANITIZE_STRING);
  $a = trim($a);
  $a = stripslashes($a);
  $a = htmlspecialchars($a);
  return $a;
  }
};
>>>>>>> c898c5ac360bcc7ff2dfd56bf6df85f615939ed0

function GoldenVarD($key) {
  echo "<pre>";
  var_dump($key);
  echo "</pre>";
}

//déclaration des variables
$taskError = ""; //initialisation de la variable erreur en lui assignant une chaine de caractère vide (optionnel??).

<<<<<<< HEAD
//GoldenP - Homemade Sanitization drink - l'action de ses nutriments neutralise les mauvais input - Serve it warm !
function GoldenP($a) {
  $a = filter_var($a, FILTER_SANITIZE_STRING); // filter_var — Filtre une variable avec un filtre spécifique -- FILTER_SANITIZE_STRING Supprime tous les tags HTML.
  $a = trim($a); // trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne.
  $a = stripslashes($a); // stripslashes — Supprime les antislashs d'une chaîne.
  $a = htmlspecialchars($a); //htmlspecialchars — Convertit les caractères spéciaux en entités HTML.
  return $a;
}

function display_todo() {
  $json = file_get_contents('todo.json');
  $json = json_decode($json, true);
  foreach ($json as $key => $value) {
    if ($json[$key]["fait"] == false) {
    echo '<label for="' . $value['tache'] . '"><input type="checkbox" name="todo[]" value="' . $value['tache'] . '" id="' . $value['tache'] . '">' . $value['tache'] . '</label><br>';
    }
  }
}

function display_done() {
  $json = file_get_contents('todo.json');
  $json = json_decode($json, true);
  foreach ($json as $key => $value) {
    if ($json[$key]["fait"] == true) {
    echo '<strike>' . $value['tache'] . '</strike><br>';
    }
  }
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ( $_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["ajouter"]) ) { // $_SERVER est un tableau contenant des informations comme les en-têtes, dossiers et chemins du script -- REQUEST_METHOD Méthode de requête utilisée pour accéder à la page.

  if (empty($_POST["addTask"])) { // si le champs input ayant pour valeur addTask est vide alors...
  $taskError = "* Veuillez entrer une tâche."; // Assignation du message d'erreur à la varialbe $teskError.
  }

  else {
  $addTask = GoldenP($_POST["addTask"]); // Récupération du message envoyé par le formulaire, passé à la moulinette maison (sanitizé) et fourré dans la variable $addTask.
  $todo = array(); // initialisation d'un tableau php.
  $todo["tache"] = $addTask; // ajout de la clé tache dont la valeur est la tâche récupérée plus haut.
  $todo["fait"] = false; // ajout de la clé "fait" dont la valeur est faux par défaut.
  $json = file_get_contents('todo.json'); // récupération du contenu brut du json et placement dans une variable.
  $json = json_decode($json, true); // décodage du contenu de la variable. Le paramètre true transforme les données en tableau php
  $json[] = $todo; // Ajout du tableau temporaire $todo contenant la "tache" et le "fait => false par defaut" à la suite des précédents tableaux contenant chacun les taches précédement encodées dans le JSON.
  $json = json_encode($json, JSON_PRETTY_PRINT); //réencodage au format JSON.
  file_put_contents('todo.json', $json); // Tout fourrer dans le fichier todo.json.
  }
}
 ?>
=======
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
    <form class="formulaire" action="todo.json" method="post">
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
      <?php if (empty($addTask)) {
          echo "erreur";
      }
      ?>
      <input type="submit" value="Ajouter">
    </fieldset>
  </form>

<?php
$todo = array();

echo json_encode($arr);
?>

</body>
</html>
>>>>>>> c898c5ac360bcc7ff2dfd56bf6df85f615939ed0
