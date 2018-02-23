<!-- # un readme de qualité où tu indiques avec qui tu as travaillé, qui a fait quoi, et d'autres informations que tu juges importantes de communiquer. -->

# Réaliser une To do list avec PHP et JSON
## développé par [Geoffrey Canivet](https://github.com/geocani) et [Daniel Muyshond](https://github.com/dmshd)

![Capture d'écran](https://github.com/dmshd/todolist/blob/master/todolist-capture.jpg)

### Idées d'améliorations à réaliser  

* ~~Ajouter un bouton reset~~  - **fait** (en hidden sur le projet pour qu'on puisse voir ce que tout le monde à écrit sur heroku)
* Ajouter une la possibilité de resset uniquement les archives
* Si la première lettre de la chaine de caractère inputée n'est pas en majuscule la mettre en majuscule  


### notes php  

`JSON_PRETTY_PRINT` Paramètre de la fonction `json_encode()` permettant d'écrire un JSON avec une indentation automatique le rendant beaucoup plus lisible.  

`header("location: index.php");` Redirection en PHP. Nous avons du l'utiliser car notre `contenu.php` opérait bien le changement demandé dans le briefing mais il falllait réactualiser la page pour constater la modification en front-end, ajouter cette ligne à la fin de notre condition à résolu le problème.  

`in_array()` — Indique si une valeur appartient à un tableau.  Fonction découverte dans la boucle utilisée par [Mathieu Leers](https://github.com/leersmathieu) , voir explication ci dessous.  

Nous avons constaté qu'il devenait compliqué de manipuler les données quand on commençait à avoir un array dans un array.  
Pour bien comprendre et visualiser l'arborescence dans nos tableaux, nous utilisons évidemment la fonction `print_r()`.  imbriquée entre les balises html `<pre>`.  

Afin de faciliter ce processus, nous avont retranscrit une fonction astucieuce, étonnante de simplicité, trouvée dans une réponse stackoverflow. Le développeur crée systématiquement une fonction de débogage pour print_r ses tableaux.  

```PHP
function GoldenPrint($key) {
  echo "<pre>";
  print_r($key);
  echo "</pre>";
}
```
mais également  

```PHP
function GoldenVarD($key) {
  echo "<pre>";
  var_dump($key);
  echo "</pre>";
}
```

## Merci

Dans notre `contenu.php` vous trouverez cette boucle :

```PHP
    for ($init = 0; $init < count($json); $init ++){         // Pour chaque ligne du tableau
        if (in_array($json[$init]['tache'], $checked)){     // Je compare les valeurs checkée avec le tableau
                                                    // --> Si valeur de "nomtache" se trouve dans le tableau $choix alors...
          $json[$init]['fait'] = true;                // Je transforme False en True
        }
    }
```  
Après avoir ramé pendant plus d'une journée afin de réaliser les objectifs du jour 3 (dans le fichier "contenu.php", modifier le status des tâches lorsqu'on le soumet), nous avons trouvé une réponse au problème dans le code de [Mathieu Leers](https://github.com/leersmathieu), lui même épaulé par [Steve Van Essche](https://github.com/Steve-VE). Merci les gars !  
