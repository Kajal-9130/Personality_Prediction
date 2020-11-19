<?php
define('TITLE', 'apptitude questions');
define('PAGE', 'apptitudequestions');
include('includes/header.php'); 

?>

<div class="col-sm-6 mt-5">
  <form class="mx-5" method="POST">
    <div class="form-group">
      <label for="inputEmail">Add Question</label>
      <input type="text" class="form-control" id="inputQuestion">
    </div>
    <div class="form-group"> 
      <label for="inputName">option 1</label>
      <input type="text" class="form-control" id="inputoption1" name="option1" >
    </div>
    <div class="form-group"> 
      <label for="inputName">option 2</label>
      <input type="text" class="form-control" id="inputoption2" name="option2" >
    </div>
    <div class="form-group"> 
      <label for="inputName">option 3</label>
      <input type="text" class="form-control" id="inputoption3" name="option3" >
    </div>
    <div class="form-group"> 
      <label for="inputName">option 4</label>
      <input type="text" class="form-control" id="inputoption4" name="option4" >
    </div>
    <button type="submit" class="btn btn-danger" name="nameupdate">Add</button>
    
  </form>
</div>
</div>
</div>













<?php
include('includes/footer.php'); 
?>