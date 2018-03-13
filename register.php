<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<style>
		.jumbotron{
		background-image: url(img/glass.jpg);
		background-size: cover;
		background-position: center;
		height: 300px;
		color:green;

	</style>

</head>
<body>
<div class="jumbotron text-center">
<form method="POST" action="input.php">
	<input type="text" name="user" placeholder="Choose your username"><br>
	<input type="password" name="password" placeholder="Choose password"><br>
	<input type="number" name="number" placeholder="Phone Number"><br>
	<input type="submit" name="submit" value="Register Now" class="btn btn-success">
	</div>
</form>
</body>
</html>