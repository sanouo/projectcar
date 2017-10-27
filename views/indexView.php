<?php
  include("template/header.php")
 ?>

 <form action="controllers/indexControllers.php" method="post">
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
   <!-- <div class="form-group">
     <input type="text" class="form-control" id="formGroupExampleInput5" name="task" placeholder="task">
   </div> -->

   <!-- <div class="form-group">
     <input type="text" class="form-control" id="formGroupExampleInput3" name="stage" placeholder="stage">
   </div> -->
   <button type="submit" value="Submit" class="btn btn-primary submi">Submit</button>
 </form>


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
 <?php
   include("template/footer.php")
  ?>
