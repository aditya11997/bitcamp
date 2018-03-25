<?php
	include('home.php');
 ?>
 <h1 style="text-align: center;">Hey! Here are the jobs you have Created alert For</h1>
 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Add New Jobs</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
	<!--My Code-->
	<br>
	<br>
	
	<div class="container">	
	<?php
	include("db.php");
	$query="SELECT *FROM addjobs";
	$queryAnswer=mysqli_query($link,$query);
		while($row=mysqli_fetch_assoc($queryAnswer)){
		$jobId=$row['id'];
		$jobTitle=$row['job_title'];
		$department=$row['department'];
		$companyName=$row['company_name'];
		$jobLocation=$row['job_location'];
		$expctedSalary=$row['expected_salary'];
		$education=$row['education'];
		$jobType=$row['job_type'];
		$jobDescription=$row['job_description'];


echo '
	<div class = "row">
		
		<div class="col-md-12">
			<div class="card"   style="width: 20rem;positive:relative;left:40%;">
			  <img class="card-img-top" src="../images/img6.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title" id="title">'.$jobTitle.'</h4>
			    <h5 class="card-title" id="department"><?php echo $job_title; ?></h5>
			    <h5 class="card-title" id="companyName"><?php echo $job_title; ?></h5>
			    <h5 class="card-title" id="jobLocation"><?php echo $job_title; ?></h5>
			    <h5 class="card-title" id="ExpectedSalary"><?php echo $job_title; ?></h5>
			    <h5 class="card-title" id="education"><?php echo $job_title; ?></h5>
			    <h5 class="card-title" id="jobType"><?php echo $job_title; ?></h5>
				<p class="card-text" id="jobDescription">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
				<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
			  </div>
			</div>
			<br><br>
		</div>
	</div>';	}
		?>
</div>

	<?php include('../footer.php'); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>