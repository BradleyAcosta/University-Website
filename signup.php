<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="main.css">


</head>
<body>



	<div id="box">
		
		<form method="post">
			<div class="input-group">
			<p class ="login-text"> Signup</p>
			</div>
			<div class="input-group">
			<input id="text" type="text" name="username" placeholder = "username"><br><br>
			</div>
			<div class="input-group">
			<input id="text" type="email" name="email" placeholder = "email "><br><br>
			</div>
			<div class="input-group">
			<input id="text" type="text" name="phonenumber" placeholder = "phonenumber"><br><br>
			</div>
			<div class="input-group">
			<input id="text" type="password" name="password" placeholder = "password"><br><br>
			</div>
			<div class="input-group">
			<input id="text" type="password" name="passwordConfirm" placeholder = "confirm password"><br><br>
			</div>
			<div class="input-group">	
			<input id="button" type="submit" value="Signup"><br><br>
			</div>
			<div class="input-group">
			<p class="text-center"><a href="login.php">Click to Login</a><br><br></p>
			</div>
		</form>
	</div>
</body>
</html>