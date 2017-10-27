<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=cars;charset=utf8', 'phpmyadmin', 'sana15');

} catch (Exception $e) {
  die($e->getMessage());

}
