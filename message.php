<?php
if(isset($_SESSION['message'])) {

?>
<h4><?= $_SESSION['message'];?> </h4>
 <?php
 unset($_SESSION['message']);
}



?>