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
      public function delete($auto)
      {
        $req = $this->bdd->exec('DELETE FROM vehicle WHERE id = '.$auto);
      }
// Execute a SELECT request
      public function get($id)
      {
        $id = (int) $id;
        $q = $this->bdd->query('SELECT id, type, mark, color, description FROM vehicle WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new $donnees['type']($donnees);
      }

      public function getList()
      {
        $req = $this->bdd->prepare('SELECT * FROM vehicle');
        $req->execute();
        $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
        return $donnees;
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
