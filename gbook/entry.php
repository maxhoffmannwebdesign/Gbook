<?php

class Entry {

  private $name;
  private $message;

  public function __construct($name, $message){
    $this->name=$name;
    $this->message=$message;
  }

  public function getName(){
    return $this->name;
  }

  public function insertion(){
    require('db.class.php');
    $stmt = $pdo->prepare('INSERT INTO entries (name, message) VALUES (?,?)');
    $stmt->execute([$this->name, $this->message]);
  }





}


 ?>
