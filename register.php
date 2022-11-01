<?php
session_start();

if(isset($_SESSION['auth']))
{
  $_SESSION['message'] = "You are already Registered";
  header("Location: index.php");
  exit(0);
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
	<link rel="stylesheet" href="CSS/style.css">

  </head>

  <body>

  <div class = "container">

    <?php include('message.php'); ?>

    <header>Registration</header>

    <form  action="registercode.php" method="post" autocomplete="off">

		<div class="field input-field">
      <input required type="text" name="name" placeholder = "Name" id = "name" required value=""> <br>
	  </div>

	    <div class="field input-field">
      <input  required type="text" name="username" placeholder = "username" id = "username" required value=""> <br>
	  </div>

       <div class="field input-field">
      <input required type="email" name="email" placeholder = "Email" id = "email" required value=""> <br>
	  </div>

	  <div class = "field input-field">
      <input required type="password" name="password" placeholder = "Password" id = "password" required value=""> <br>
      </div>

       <div class = "field input-field">
      <input required type="password" name="confirmpassword" placeholder = "Confirm Password" id = "confirmpassword" required value=""> <br>
	  </div>
<br>
 
  <div class = "field Check-input">

  <label class = "form-label">Select User Type:</label><br>
  <select class = "Check" name = "Check" required value = "">
    <option value = ""> --Select--</option>
    <option value = "0">Student</option>
    <option value = "1">Admin</option>
  </select>
  </div>

	  <div class = "field button-field">
		<br>
      <button type="submit" name="register_btn">Register</button>
	  </div>
    </form>


	<div class = "form-link">
		<b>
			<br>
			<br>
    <span>Already have an account? <a href="login.php">Login</a></span>
		</b>
  </div>

  </body>
</html>