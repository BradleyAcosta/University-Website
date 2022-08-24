<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//read from database
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="main.css">

</head>
<body>


<div class="container">
	<div id="box">
		
		<form method="post">
			<div class="input-group">
			<p class ="login-text"> Login</p>
			</div>
			<div class="input-group">
			<input id="text" type="text" placeholder="username" name="username"><br><br>
			</div>
			<div class="input-group">
			<input id="text" type="password" placeholder = "password"name="password"><br><br>
			</div>
			<div class="input-group">
			<input class = "form-control "id="button" type="submit" value="Login"><br><br>
			</div>
<div class="input-group">
			<p class="text-center"><a href="signup.php">Click to Signup</a><br><br></p>
</div>
		</form>
	</div>
	</div>
</body>
</html>