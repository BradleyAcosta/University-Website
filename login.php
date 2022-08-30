<?php
require 'server.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM registration WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
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

    <form class="" action="" method="post" autocomplete="off">

	<div class="field input-field">
     
      <input type="text" name="usernameemail" placeholder = "Username or Email "id = "usernameemail" required value=""> <br>
	</div>
	
	<div class="field input-field">
      <input type="password" name="password" placeholder="Enter your password "id = "password" required value=""> <br>
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