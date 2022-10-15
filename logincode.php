<?php

session_start();
include('database/server.php');

if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($conn, $_POST['usernameemail']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $login_query = "SELECT * FROM registration WHERE email = '$email' AND password = '$password' LIMIT 1";
    $login_query_run = mysqli_query($conn, $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data) {
           $user_id = $data['id'];
           $user_name = $data['name']. ''.$data['username'];
           $user_email = $data['email'];
           $role_as = $data['role'];



        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as"; //1 = admin , 0 = user
        $_SESSION['auth_user'] = [
            'user_id' =>$user_id,
            'user_name' =>$user_name,
            'user_email' =>$user_email,
        ];
        if($_SESSION['auth_role']== '1') // admin = 1

        {
            $_SESSION['message'] = "Welcome to dashboard";
        header("Location: admin/Admin.php");
        exit(0);

        } else if($_SESSION['auth_role']== '0') // user = 0
        
        { 
            $_SESSION['message'] = "Welcome to Home Page";
            header("Location: index.php");
            exit(0);

        }
    }
    else 
    {
        $_SESSION['message'] = "Invalid email or password";
        header("Location: login.php");
        exit(0);
    }
}
else 
{
 echo "<script> alert ('You are not logged in'); </script>";
 header("Location: login.php");
 exit();

}
?>