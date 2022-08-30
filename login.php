
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form </title>
</head>
<body>
	<div class = "container">
<div class = "header">

<h2> Login </h2>

</div>

<form action="login.php" method="post">
<div>

	<label for="username"> Username </label>
	<input type="text" placeholder="Username" name="username" required>

</div>

<div class="input-group">

	<label for="email"> Email </label>
	<input type="email" placeholder="Email" name="email" required>

</div>

<div class="input-group">

	 <label for="password"> password </label>
	<input type="password" placeholder="Password" name="password" required>

</div>

<div class="input-group">
<button type = "submit" name="reg_user" class="btn">Login</button>
</div>
			
<p> Not a user? <a href="register.php"><b>Register here</b></a></p>

	
		</form>
	</div>
</body>
</html>