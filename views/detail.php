

<!-- start of the div class container -->
        <div class="container">
          <div class="row">

            <div class="card carte col-12 col-md-6 col-lg-4">
              <div class="card-block">
              <h3 class="card-title"><?php echo $value['type']; ?></h3>
              <p class="card-text"><?php echo $value['mark']; ?></p>
              <p class="card-text"><?php echo $value['color']; ?></p>
              <p class="card-text"><?php echo $value['description']; ?></p>
              <a href="detailprojet.php?detail=<?php echo $value['id']; ?>" class="btn btn-primary tonbou detail">Detail</a><br>
              <a href=""><i class="material-icons">delete</i></a>
              </div>
            </div>


          </div>
        </div>
<!-- end of the div class container -->
