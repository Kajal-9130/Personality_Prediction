<?php
define('TITLE', 'Profile');
define('PAGE', 'Profile');
include('includes/header.php'); 

?>

<div class="col-sm-6 mt-5">
  <form class="mx-5" method="POST">
    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail"  readonly>
    </div>
    <div class="form-group"> 
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="rName" >
    </div>
    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
   
  </form>
</div>
</div>
</div>
<?php
include('includes/footer.php'); 
?>