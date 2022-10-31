<?php
include('database/server.php');

//Authentication on the website. Have to login or create an account to have access to the website
if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login to Access Website";
    header("Location: login.php");
    exit(0);
}

else{
    
    if($_SESSION['auth_role'] != "1")
{
    $_SESSION['message'] = "You are not Authorised as ADMIN";
    header("Location: login.php");
    exit(0);
    
}
}

?>