<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<style>
.jumbotron{
	text-align:center;
}
		form{
			text-align: center;
			margin-top: 130px;
		}
	</style>
</head>
<body>
<div class="jumbotron">
<h2><b>login</b></h2>
<form method="POST" action="get.php">
	<input type="text" name="username" placeholder="input your username"><br><br>
	<input type="password" name="password" placeholder="password"><br><br>
	<input type="submit" name="submit" value="Login">
</div>
</form>
</body>
</html>