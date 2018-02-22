<?php

// ini_set('display_errors', 1);

// Le fichier "contenu.php" modifie le status des tâches lorsqu'on le soumet.
if ( $_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["enregistrer"]) AND !empty($_POST['todo']) ) {
$json = file_get_contents('todo.json');
$json = json_decode($json, true);
$checked = $_POST["todo"];
////////////////////////////////////////
///////////// Thanks Mathieu //////////
///////////////////////////////////////
    for ($init = 0; $init < count($json); $init ++){         // Pour chaque ligne du tableau
        if (in_array($json[$init]['tache'], $checked)){     // Je compare les valeurs checkée avec le tableau
                                                    // --> Si valeur de "nomtache" se trouve dans le tableau $choix alors...
          $json[$init]['fait'] = true;                // Je transforme False en True
        }
    }
///////////////////////////////////////
///////////////////////////////////////
    $json = json_encode($json, JSON_PRETTY_PRINT);
    file_put_contents('todo.json', $json); // Tout fourrer dans le fichier todo.json.
    header("location: index.php"); // Redirige vers index.php (avant ça le JSON était modifié mais il fallait recharger la page pour que les tâches passent en Archive);
  }

?>
