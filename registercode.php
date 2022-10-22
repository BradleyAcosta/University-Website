<?php
session_start();
include('database/server.php');

if(isset($_POST["register_btn"])){
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $username = mysqli_real_escape_string($conn,$_POST["username"]);
  $email = mysqli_real_escape_string($conn,$_POST["email"]);
  $password = mysqli_real_escape_string($conn,$_POST["password"]);
  $confirmpassword = mysqli_real_escape_string($conn,$_POST["confirmpassword"]);
  $role_as = $_POST["Check"];

    if($password == $confirmpassword) {

        //check email
        $checkEmail = "SELECT email FROM registration WHERE email = '$email' ";
        $checkEmail_run = mysqli_query($conn, $checkEmail);

        if(mysqli_num_rows($checkEmail_run) > 0)
        {
            //Already email exists
            $_SESSION['message'] = "Already Email Exists";
            header("Location: register.php");
            exit(0);

        }
        else {
           $user_query = "INSERT INTO registration (name, username, email, password, `Check`) VALUES('$name', '$username', '$email', '$password', '$role_as') ";
           $user_query_run = mysqli_query($conn, $user_query);

           if($user_query_run)
           {

            $_SESSION['message'] = "Registered Successfully";
            header("Location: login.php");
            exit(0);

           } else {

            $_SESSION['message'] = "Something went wrong";
            header("Location: register.php");
            exit(0);

           }
        }

    } else {
        $_SESSION['message'] = "Password and Confirm Password does not Match";
        header("Location: register.php");
        exit(0);
    }

} else{

    header("Location: register.php");
    exit(0);

 }

  ?>