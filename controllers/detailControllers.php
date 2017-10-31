<?php
// call of the database
require("model/connexion.php");
// call of the Class ClientManager
require("model/ClientManager.php");
// load all class
function loadClass($class) {
  require("entities/". $class. ".php");
}
spl_autoload_register("loadClass");



if(isset($_GET['id'])){
  $manager = new ClientManager($bdd);
  $donnees= $manager->get($_GET['id']);
}
// si get detail non null
  // creer manager

  // manager va chercher le vehicule par rapport a get detailControllers en objet

  //si ya du post de modification
    // enregistre la modif
    // redirection

  // affiche
