<?php

session_start();


$username = "";
$email = "";

$errors = array();

//connect to database

$db = mysqli_connect('localhost', 'root', '', 'student_user') or die("could not connect to database");

//Register users

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);

//form validation

if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password)) {array_push($errors, "Password is required");}
if($password != $cpassword) {array_push($errors, "Password do not match");}

//check db for existing user with same username 

$user_check_query = "SELECT * FROM registration WHERE username = '$username' or  email = '$email' LIMIT 1";

$result = $mysqli_query($db, $user_check_query);

$user = mysqli_fetch_assoc($result);

if($user) {

    if($user['username'] === $username) {
        array_push($errors, "Username already exist");
}
    if($user['email'] === $email) {
        array_push($errors, "Email already exist");
    }
}

if(count($errors) == 0) {
    $password = md5($password); //md5 will encrypt(hide) the password
    $query = "INSERT INTO registration (username , email, password) VALUES ('$username', '$email','$password')"; 

    mysqli_query($db, $query);

    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in...";

    header('location : index.php');
}


?>