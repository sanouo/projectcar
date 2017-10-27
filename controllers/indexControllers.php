<?php
require ('model/connexion.php');
 require("model/ClientManager.php");
function loadClass($class) {
  require("../entities/" . $class . ".php");
}
spl_autoload_register("loadClass");

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
      $manager->add($vehicule);
      header("Location: index.php");
}



$vehicules = $manager->getList();
var_dump($vehicules);

// convertir $vehicule [ [], [], [], ] -> [objet, Objet, obje]

var_dump($vehicules);
//affiche la vue avec forach $vehicules
//require 'views/indexView.php';
