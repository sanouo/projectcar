<?php

require 'controllers/detailControllers.php';
?>

<!-- start of the div class container -->
        <div class="container">
          <div class="row">



            <div class="card carte col-12 col-md-6 col-lg-4">
              <div class="card-block">
              <h3 class="card-title"><?php echo $donnees->getId();?></h3>
              <p class="card-text"><?php echo $donnees->getType();?></p>
              <p class="card-text"><?php echo $donnees->getMark();?></p>
              <p class="card-text"><?php echo $donnees->getColor();?></p>
               <a href="detail.php?id=<?php echo $value['id']; ?>" class="btn btn-primary tonbou detail">Detail</a><br>
              <a href="index.php?auto=<?php echo $value['id']; ?>"><i class="material-icons">delete</i></a>
              </div>
            </div>

          </div>
        </div>

<!-- end of the div class container -->
