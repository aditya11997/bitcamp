<?php
	session_start();
	$username = $_SESSION['username'];
	//$email = $_SESSION['email'];
 ?>
 <html>
 	<head>
 		<script src="https://use.fontawesome.com/75c52daac5.js"></script>
 		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 		<link rel="stylesheet" href="home.css">
 		<link rel="stylesheet" href="jobSeekerHome.css">
 		<link rel="stylesheet" href="footer.css">
 	</head>
 	<body>
 		
 		
 		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <!-- <a class="navbar-brand" href="#"><img src="images/logo.png" width="150px" height="0px" alt=""></a> -->
		  <img src="images/logo.png" alt="JOBIZZA" width = "150px" height="80px" style="margin-left: 20px;display: inline-block;">
 		<h1 style="display: inline-block;color: white;text-align: center;position:absolute;float: center;left:50%;font-size:40px;" class="text-uppercase">Jobizza</h1>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link active" href="../test.php" style="font-size: 20px;padding-left: 15px">Home <span class="sr-only">(current)</span></a>
		      <!-- <a class="nav-item nav-link" href="My_Jobs.php" style="font-size: 20px;padding-left: 15px;color: #FF5733">My Jobs</a> -->
		      <a class="nav-item nav-link" href="documents/index.php" style="font-size: 20px;padding-left: 15px;color: #FF5733">Upload Resume</a>
		      <a class="nav-item nav-link" href="JobSeekerHome1.php" style="font-size: 20px;padding-left: 15px;color: #FF5733">SearchJobs</a>
		      <a href="" class="nav-item nav-link" style="position:absolute;right:20px;color: white;font-weight: bold;font-family: Helvetica;color: color: #FF5733" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover"><?php echo $username; ?></a>
		    </div>
		    </div>
		  </div>
		</nav>
			<div class="jumbotron container-fluid">
			  <h1 class="display-3" style = "text-align: center;">Hello, <?php echo $username; ?></h1>
			</div>
			<h3 style="text-align: center">Here are some of the jobs you can apply for</h3>
			<!-- Modal -->
			
		<div class="container">	
	<?php
	include("db.php");
	$query="SELECT *FROM addjobs ORDER BY job_location";
	$queryAnswer=mysqli_query($link,$query);
		while($row=mysqli_fetch_assoc($queryAnswer)){
		?>
		<?php
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
		
		<div class="col-sm-12">
			<div class="card" class="card" style="width: 20rem;positive:relative;left:40%;background-color:#FECF72;color:#C70039">
			  <img class="card-img-top" src="../images/jobs.gif" alt="Card image cap">
			  <div class="card-body"  style="background-color: #32C0F5>
			  php
			    <h4 class="card-text" id="title">'.'<b>JOB TITLE -</b>'.$jobTitle.'</h4>
			    <h5 class="card-text" id="department">'.'<b>Job Department -</b>'.$department.'</h5>
			    <h5 class="card-text" id="companyName">'.'<b>Company Name -</b>'.$companyName.'<?php echo $job_title; ?></h5>
			    <h5 class="card-text" id="jobLocation">'.'<b>Location -</b>'.$jobLocation.'<?php echo $job_title; ?></h5>
			    <h5 class="card-text" id="ExpectedSalary">'.'<b>Expected Salary -</b>'.$expctedSalary.'<?php echo $job_title; ?></h5>
			    <h5 class="card-text" id="education">'.'<b>Educational Requirements -</b>'.$education.'<?php echo $job_title; ?></h5>
			    <h5 class="card-text" id="jobType">'.'<b>Job Type -</b>'.$jobType.'<?php echo $job_title; ?></h5>
				<p class="card-text" id="jobDescription">'.'<b>Job Requirements -</b>'.$jobDescription.'</p>
				 <a href="apply.html" class="btn btn-primary">Apply</a> 
			  </div>
			</div>
			<br><br>
		</div>
	</div>';
		}
		?>
</div>

	<?php include('footer.php'); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>	
 	</body>