<?php
session_start();

//Logged out Code
if(isset($_POST['logout_btn'])) {

   
    unset( $_SESSION['auth']);
    unset( $_SESSION['auth_role']);
    unset( $_SESSION['auth_user']);

    //Logged out message on Login Page
    $_SESSION['message'] = "Logged Out Successfully";
    header("Location: login.php");
    exit(0);
}


?>