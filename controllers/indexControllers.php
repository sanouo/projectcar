<?php
// call of the database
require("model/connexion.php");

// call of the Class ClientManager
require("model/ClientManager.php");

// load all class
function loadClass($class) {
  require("entities/" . $class . ".php");
}
spl_autoload_register("loadClass");

// create object $manager type ClientManager
$manager = new ClientManager($bdd);

if (isset($_POST['type']) && isset($_POST['mark']) && isset($_POST['color'])&& isset($_POST['description'])) {
   $donnees = [
        "type" => $_POST['type'],
        "mark" => $_POST['mark'],
        "color" => $_POST['color'],
        "description" => $_POST['description'],
      ];
      if ($donnees['type'] == 'Moto') {
        $vehicule = new Motorbike($donnees);
      }
      else if ($donnees['type'] == 'Car') {
        $vehicule = new Car($donnees);
      }
      else if ($donnees['type'] == 'Truck') {
        $vehicule = new Truck($donnees);
      }
      else {
        echo "Enter the correct type";
      }
      $manager->add($vehicule);
      header("Location: index.php");
}




// $vehicules = $manager->getList();
// var_dump($vehicules);

// convertir $vehicule [ [], [], [], ] -> [objet, Objet, obje]

// var_dump($vehicules);
//affiche la vue avec foreach $vehicules
//require 'views/indexView.php';
