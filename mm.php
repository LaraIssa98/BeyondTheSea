<?php
$username = "lara.issa";
$password = "123+_ABcd";
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
	if($_POST['username'] == $username && $_POST['password'] == $password){
		$_SESSION["is_logged_in"] = $username;
		header('Location:loginform.php');
	}else{
		echo "You have entered  wrong password, try again...";
	}
}
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Log in</title>
</head>
<body>
<form class = "form-horizontal" name = "login" method = "post">
    <div class = "form-group">
    <label for = "name" class = "control-label col-sm-2">Username : </label>
	<div class = "col-md-3">
	<input type = "text" name = "username" id = "name" class = "form-control">
	</div>
    </div>
	 
	<div class = "form-group">
    <label for = "password" class = "control-label col-sm-2">Password : </label>
	<div class = "col-md-3">
	<input type = "password" name = "password" id = "password" class = "form-control">
	</div>
    </div>
	
	<div class = "form-group">
	    <div class = "col-md-2"></div>
	   <button class = "btn btn-default col-sm-2">Log in</button>
	</div>
</form>
</body>
</html>