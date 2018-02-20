<?php

function debug($key) {
  echo "<pre>";
  print_r($key);
  echo "</pre>";
}


function display_list() {
  $json = file_get_contents('todo.json');
  $json = json_decode($json, true);
  foreach ($json as $key => $value) {
    echo "<input type=\"checkbox\" id=". $key .">" . $value["tache"] . "<br>";
  }
}


 ?>
