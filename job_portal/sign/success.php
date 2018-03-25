<?php 
	
	session_start();
	$username = $_SESSION['Jobseeker_name'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../bootstrap-4.0.0-beta/dist/css/bootstrap.css">
</head>
<body>
	<br><br>
	<div class="container">
		<form class="form-control">
			<h3>Thank You <?php echo $username; ?> for Submitting Your Application</h3>
			<h4 class="alert alert-success">You have successfully applied for the job.</h4>
			<h5><a href="logout.php">logout</a></h5>
		</form>
	</div>
	
</body>
</html>