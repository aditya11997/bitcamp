<?php include('JobSeekerServer.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
<!-- 	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-beta/dist/css/bootstrap.css">
 -->	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post">

		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Username<span class="required">*</span></label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Email<span class="required">*</span></label>
			<input type="email" name="email">
		</div>
		<div class="input-group">
			<label>Password<span class="required">*</span></label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password<span class="required">*</span></label>
			<input type="password" name="password_2">
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="Jobseekerlogin.php">Sign in</a>
		</p>
	</form>
</body>
</html>