<?php 
session_start();
if (!isset($_SESSION['user'])) {
	ob_start();
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CAT 2</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
</head>
<body>
<div class="jumbotron">
<center>
	<h1>YOU HAVE SUCCESSFULLY LOGGED IN!!</h1><br>
	<form method="POST" action="update.php">
		<label>Change Your Password</label><br>
		<input type="text" name="username" placeholder="Input Username"><br><br>
		<input type="password" name="pass1" placeholder="Old Password"><br><br>
		<input type="password" name="pass2" placeholder="New Password"><br><br>
		<input type="submit" name="submit" value="Change Password"><br><br>
	</form>
	<a href="logout.php" class="btn btn-warning">LOGOUT</a>
</center>
</div>
</body>
</html>