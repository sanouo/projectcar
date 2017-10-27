<?php

class ClientManager {

      protected $bdd; // Instance de PDO.

      public function __construct($bdd)
      {
        $this->setBdd($bdd);
      }

      public function add($auto)
      {
         $q = $this->bdd->prepare('INSERT INTO vehicle(type, mark, color, description) VALUES( :type, :mark, :color, :description)');
        //  $req = $bdd->prepare('INSERT INTO vehicle(type, mark, color, description) VALUES( :type, :mark, :color, :description)');
        //  $req->execute(array(
        //      'type' => $_POST['type'],
        //      'mark' => $_POST['mark'],
        //      'color' => $_POST['color'],
        //      'description' => $_POST['description']
        //    ));
        $q->bindValue(':type', $auto->getType());

        $q->bindValue(':mark', $auto->getMark());

        $q->bindValue(':color', $auto->getColor());

        $q->bindValue(':description', $auto->getDescription());

        $q->execute();
      }

      public function delete(Vehicle $auto)
      {
        // Exécute une requête de type DELETE.
      }

      public function get($id)
      {
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
        return $vehicule;

      }

      public function getList()
      {
        // Retourne la liste de tous les personnages.
        $req = $this->bdd->prepare();
        $req->execute();
        $vehicules= $req->fetchAll();

        return $vehicules;
      }

      public function update(Personnage $auto)
      {
        // Prépare une requête de type UPDATE.
        // Assignation des valeurs à la requête.
        // Exécution de la requête.
      }

      public function setBdd(PDO $bdd)
      {
        $this->bdd = $bdd;
      }
    }



 ?>
