<?php
if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login to Access Website";
    header("Location: login.php");
    exit(0);
}

// Display ay message to the user
if(isset($_SESSION['message'])) {

?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?= $_SESSION['message']?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

 <?php
 unset($_SESSION['message']);
}



?>