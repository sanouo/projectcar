<?php

class ClientManager {

  public function getBdd() {
      $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'phpmyadmin', 'sana15');
      return $bdd;
  }

}


 ?>
