<?php
include('database/server.php');


if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login to Access Dashboard";
    header("Location: login.php");
    exit(0);
}

else{
  
}

?>