<?php

session_start();


$username = "";
$email = "";

//connect to database

$db = mysqli_connect('localhost', 'root', '', 'student_user') or die("could not connect to database");

//Register users

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$passwordConfirm = mysqli_real_escape_string($db, $_POST['cpassword']);

//form validation



?>