<?php

class GBook {
  public function showEntries(){
    require('db.class.php');
    $stmt = $pdo->prepare('SELECT * FROM entries');
    $stmt ->execute();
    while ($row = $stmt->fetch())
      {
        $name = $row['name'];
        $message = $row['message'];
        echo'<div style="width: 30%; margin-top: 1rem; margin-bottom: 2rem;">
        <h2>
        '.$name.'
        </h2>
        <p>
        '.$message.'
        </p>
        </div>';
      }
  }
}

?>
