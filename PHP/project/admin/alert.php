<?php
$_SESSION["msg"] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>Success : </strong> 
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span>
</button>
</div>";
header("location:");


$_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Error : </strong> 
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
header("location:");

?>