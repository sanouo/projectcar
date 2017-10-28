<?php

// call of the indexControllers
  include("controllers/indexControllers.php");

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
