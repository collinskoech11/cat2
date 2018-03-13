<!DOCTYPE html>
<html>
<head>
	<title>CAT 2 REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<style>
	.jumbotron{
		background-image: url(img/space.jpg);
		background-size: cover;
		background-position: center;
		height: 300px;
		color:green;
	}
	body{
		background-color:gold;
	}
	h2{
		font-size: 60px;
		font-family: "Arial red",Gadget, sans-serif;
	}
</style>
</head>
<body>

		<div class="jumbotron">
			<div>
				<h2 class="text-center">Register And login </h2>
			</div>


		</div>

		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#login">Login</a></li>
			<li><a data-toggle="tab" href="#register">Register</a></li>
			
		</ul>

		<div class="tab-content">
			
			<div id="login" class="tab-pane fade in active">
				<h3>log in here</h3>
				<form role="form" action="register.php" method="post">
					<div class="form-group">
						<label>UserName:</label>
						<input type="text" name="user" class="form-control" id="text">
					</div>
					
					<div class="form-group">
						<label for="pwd">Phone number:</label>
						<input type="number" name="number" class="form-control" id="num">
					</div>
					<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
					</div>
					<button type="submit" name="login" class="btn btn-default">Login</button>
				</form>
			</div>
			
			
			<div id="register" class="tab-pane fade">
				<form role="form" action="register.php" method="post">
					<div class="form-group">
						<label for="text">Name:</label>
						<input type="text" name="name" class="form-control" id="text" required="">
					</div>
		
					<div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" name="pass" class="form-control" id="pwd">
					</div>
					
					<button type="submit" name="register" class="btn btn-default">Register</button>
				</form>
			</div>
		</div>

	</div>
</div>
<script src="bootstrap-3.3.7-dist/js/jquery.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body>
</html>