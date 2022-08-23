<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="connect.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username">
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email">
			</div>
			<div class="input-group">
				<input type="phonenumber" placeholder="Phonenumber" name="phonenumber">
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password">
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="passwordConfirm">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>