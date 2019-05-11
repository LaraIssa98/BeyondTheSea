<?php
if(isset($_COOKIE['email']) and isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['password'];
}
?>

<!DOCTYPE html>
<html lan="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>

	<body>
		<h1>Please enter your email and password before filling our form</h1>
	<form action="validate.php" method ="post">
		<label for="Username">Username: </label>
		<input id="email" type="email" name="email">
		<label for="Password">Password: </label>
		<input id="Password" type="Password" name="Password">
		<label> <input type="checkbox" name="remember">remember me</label>
		<div>
			<input type="Login" value="Login" name="loging">
		</div>
	</form>
	</body>
</html>