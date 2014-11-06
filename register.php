<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Register/title>
	</head>
	<body>
	
	<p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
	
	<h3>Registration Form</h3>
	<br /><br />
	<form action="" method="POST">
	Username: <input type="text" name="username"><br /><br />
	Password: <input type="password" name="password"><br /><br />
	<input type="submit" value="Register" name="register">
	</form>
	
	<?php
	if (isset($_POST["register"])) {
			
			if (!empty($_POST['username']) && !empty($_POST['password'])) {
				$user = $_POST['username'];
				$password = $_POST['password'];
			
			}
	}
	
	
	</body>
</html>
