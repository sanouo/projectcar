<?php
  include("template/header.php");
 ?>

 <form action="index.php" method="post">
   <div class="form-group">
     <input type="text" class="form-control" id="formGroupExampleInput" name="type"  placeholder="type">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="formGroupExampleInput1" name="mark" placeholder="mark">
   </div>
   <div class="form-group">
     <input type="text" class="form-control" id="formGroupExampleInput2" name="color" placeholder="color">
   </div>
   <div class="form-group">
     <input type="text" class="form-control description" id="formGroupExampleInput3" name="description" placeholder="description">
   </div>
   <button type="submit" value="Submit" class="btn btn-primary submi">Submit</button>
 </form>


 <!-- start of the div class container -->
         <!-- <div class="container">
           <div class="row">


             <div class="card carte col-12 col-md-6 col-lg-4">
               <div class="card-block">
               <h3 class="card-title"><?php echo $donnees['type']; ?></h3>
               <p class="card-text"><?php echo $donnees['mark']; ?></p>
               <p class="card-text"><?php echo $donnees['color']; ?></p>
               <p class="card-text"><?php echo $donnees['description']; ?></p>
               <a href="detailprojet.php?detail=<?php echo $donnees['id']; ?>" class="btn btn-primary tonbou detail">Detail</a><br>
               <a href="supprim.php?sup=<?php echo $donnees['id']; ?>"><i class="material-icons">delete</i></a>
               </div>
             </div>



           </div>
         </div> -->
 <!-- end of the div class container -->



<!--
 <table>
   <thead>

   </thead>

<tbody>
  <?php
  foreach($vehicules as $key => $vehicule)
  {
   ?>
   <tr>
     <td><?php echo $vehicule->getType(); ?></td>
   </tr>
   <?php
 }
  ?>
</tbody>
 </table>
-->

 <?php
   include("template/footer.php");
  ?>
