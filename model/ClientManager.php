<?php

class ClientManager {

      protected $bdd;

      public function __construct($bdd)
      {
        $this->setBdd($bdd);
      }

// setters for bdd
       public function setBdd(PDO $bdd)
       {
          $this->bdd = $bdd;
       }

// Execute a INSERT request
      public function add($auto)
      {
         $q = $this->bdd->prepare('INSERT INTO vehicle(type, mark, color, description) VALUES( :type, :mark, :color, :description)');

        $q->bindValue(':type', $auto->getType());
        $q->bindValue(':mark', $auto->getMark());
        $q->bindValue(':color', $auto->getColor());
        $q->bindValue(':description', $auto->getDescription());

        $q->execute();
      }

// Execute a DELETE request
      public function delete(Vehicle $auto)
      {

      }

// Execute a SELECT request
      public function get($id)
      {
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet Personnage.
        // return $vehicule;
      }


      public function getList()
      {
        // $req = $this->bdd->prepare('SELECT * FROM vehicle');
        // $req->execute();
        // $vehicules= $req->fetchAll();
        //
        // return $vehicules;

        $req = $bdd->prepare('SELECT * FROM vehicle WHERE type = :type AND mark = :mark AND color = :color AND description = :description');
        $req->execute(array(
            'type' => $_POST['type'],
            'mark' => $_POST['mark'],
            'color' => $_POST['color'],
            'description' => $_POST['description']));
        $resultat = $req->fetch();

      }




// Execute a UPDATE request
      public function update(Vehicle $auto)
      {
        // Prépare une requête de type UPDATE.
        // Assignation des valeurs à la requête.
        // Exécution de la requête.
      }

    }



 ?>
