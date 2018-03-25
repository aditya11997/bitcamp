<?php include('userServer.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="userLogin.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>email</label>
			<input type="text" name="email" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="reg.php">Sign up</a>
		</p>
	</form>


</body>
</html>