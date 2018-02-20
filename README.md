<!-- # un readme de qualité où tu indiques avec qui tu as travaillé, qui a fait quoi, et d'autres informations que tu juges importantes de communiquer. -->
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
# Réaliser une To do list avec PHP et JSON
## développé par (Greoffrey Canivet)[] et Daniel Muyshond

## notes php  
Nous avons constaté qu'il devenait compliqué de manipuler les données quand on commençait à avoir un array dans un array.  
Pour bien comprendre et visualiser l'arborescence dans nos tableaux, nous utilisons évidemment la fonction `print_r()`.  imbriquée entre les balises html `<pre>`.  

<!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/geocani" aria-label="Follow @geocani on GitHub">Follow @geocani</a>

Nous avons retranscrit une fonction astucieuce, étonnante de simplicité, trouvée dans une réponse stackoverflow. Le développeur crée systématiquement une fonction de débogage pour print_r ses tableaux.

```PHP
function debug($key) {
  echo "<pre>";
  print_r($key);
  echo "</pre>";
}
```
