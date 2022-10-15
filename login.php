<?php
require 'database/server.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	  <link rel="stylesheet" href="style.css">

    <title>Login</title>
  </head>
  <body>

	<div class ="container">
    <header>Login</header>
    
	<div class="field input-field">
     
  <form action = "logincode.php" method = "POST">
      <input type="text" name="usernameemail" required placeholder = "Username or Email "id = "usernameemail" required value=""> <br>
	</div>
	
	<div class="field input-field">
      <input type="password" name="password" required placeholder="Enter your password "id = "password" required value=""> <br>
	</div>
  

	<div class = "field button-field">
		<br>
      <button type="submit" name="submit">Login</button>
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