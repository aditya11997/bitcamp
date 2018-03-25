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
		</nav><br>
		<div class="container">
			<h3 style="text-align: center;color:#336EFF">Choose one of the categories and select your jobs accordingly</h3>
			<a href="JobSeekerLocation.php"><button class="btn-outline-success btn-lg">Location</button></a>
		</div>
		
	</body>
</html>