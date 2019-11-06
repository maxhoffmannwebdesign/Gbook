<?php

  $name = $_POST['name'];
  $message = $_POST['message'];

  require('entry.php');
  $entry1 = new Entry($name, $message);
  echo $entry1->insertion();
  header("Location: index.php");

 ?>
