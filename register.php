<?php
require 'server.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $Check = $_POST["AdminOrStudent"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM registration WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword && $Check == "Student" || "Admin"){
      $query = "INSERT INTO registration VALUES('','$name','$username','$email','$password', '$Check')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";

      
    } else {
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
   if($Check == "Student"){
    header("Location: index.php");
   } else if ($Check == "Admin"){
    header("Location: admin.php");
   }
  }
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
	<link rel="stylesheet" href="style.css">

  </head>

  <body>

  <div class = "container">

    <header>Registration</header>
    <form class="" action="" method="post" autocomplete="off">

		<div class="field input-field">
      <input type="text" name="name" placeholder = "Name" id = "name" required value=""> <br>
	  </div>

	    <div class="field input-field">
      <input type="text" name="username" placeholder = "username" id = "username" required value=""> <br>
	  </div>

       <div class="field input-field">
      <input type="email" name="email" placeholder = "Email" id = "email" required value=""> <br>
	  </div>

	  <div class = "field input-field">
      <input type="password" name="password" placeholder = "Password" id = "password" required value=""> <br>
      </div>

       <div class = "field input-field">
      <input type="password" name="confirmpassword" placeholder = "Confirm Password" id = "confirmpassword" required value=""> <br>
	  </div>
<br>
    <div class = "field Check-input">
      <label class = "form-label">Select User Type:</label><br>
      <select class  = "AdminOrStudent" name = "role" required value="">
  <option selected value = "Student">Student</option>
  <option value = "Admin">Admin</option>
      </select>
    </div>

	  <div class = "field button-field">
		<br>
      <button type="submit" name="submit">Register</button>
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