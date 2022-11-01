<?php
require 'database/server.php';

session_start();

if(isset($_SESSION['auth']))
{
  $_SESSION['message'] = "You are already logged In";
  header("Location: index.php");
  exit(0);
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	  <link rel="stylesheet" href="CSS/style.css">

    <title>Login</title>
  </head>
  <body>

	<div class ="container">

  <?php include('message.php'); ?>

    <header>Login</header>
    
	<div class="field input-field">
     
  <form action = "logincode.php" method = "POST">
      <input type="text" name="email" required placeholder = "Email"  required value=""> <br>
	</div>
	
	<div class="field input-field">
      <input type="password" name="password" required placeholder="Enter your password " required value=""> <br>
	</div>
  

	<div class = "field button-field">
		<br>
      <button type="submit" name="login_btn">Login</button>
	</div>

    </form>

	<div class = "form-link">
		<b>
			<br>
		<br>
    <span>Don't have an account? <a href="register.php">Register</a></span>
		</b>
  </div>

	</div>
  </body>
</html>