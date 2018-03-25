<?php 
	include('home.php');

	$job_title = $_SESSION['job_title'];
	$company_Name = $_SESSION['company_Name'];
	$job_location = $_SESSION['job_location'];
	$salary = $_SESSION['salary'];
	$job_type = $_SESSION['job_type'];
	$job_description = $_SESSION['job_description'];

	$link = mysqli_connect("localhost", "root", "", "employer");
	include('select.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add New Jobs</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<!--My Code-->
	<br>
	<br>
	<div class="container">
	<h3>You have been successfully created the following job notification for job titled <?php echo $job_title; ?></h3><br>
	<h4>This will displayed to jobseekers</h4>
		<div class="card" style="width: 20rem;">
		  <img class="card-img-top" src="../images/img6.jpg" alt="Card image cap">
		  <div class="card-body">
		    <h4 class="card-title"><?php echo $job_title; ?></h4>
		    <p class="card-title"><b>Company Name</b> <?php echo $company_Name; ?></p>
		    <p class="card-title"><b>Job Location</b> <?php echo $job_location; ?></p>
		    <p class="card-title"><b>Job Type</b> <?php echo $job_type; ?></p>
		    <p class="card-title"><b></b><?php echo $job_description; ?></p>
		    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
		  </div>
		</div>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<br>
    <?php include('footer.php'); ?>
    
</body>
</html>