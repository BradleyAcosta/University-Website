<?php
require 'database/server.php';
include('allcode.php');
include('authentication.php');





if(isset($_POST['update_user']))
{
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $user_name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role_as = $_POST['Check'];



  $query = "UPDATE registration SET name = '$name', username = '$user_name', email = '$email', password = '$password', `Check` ='$role_as'
  WHERE id ='$user_id' ";

  $query_run = mysqli_query($conn, $query);

  if($query_run) {
    $_SESSION['message'] = "Update Successfully";
    header("Location : StudentAD.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location : register-edit.php");
   exit(0);
}


}

?>