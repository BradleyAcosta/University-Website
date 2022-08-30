<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form</title>
</head>
<body>
	<div class="container">
		<div class = "header">

			<h2> Register </h2>

		</div>

		<form action="register.php" method="post">
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

			    <label for="password"> Confirm Password </label>
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
			</div>
			<div class="input-group">
				<button type="submit" name="login_user" class="btn">Register</button>
			</div>

			<p>Have an account? <a href="index.php"><b>Login in</b></a></p>


		</form>
	</div>
</body>
</html>