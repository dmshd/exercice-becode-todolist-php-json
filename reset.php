<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST["reinit"])) {
  $resetJson = "[]";
  file_put_contents('todo.json', $resetJson);
}

?>
