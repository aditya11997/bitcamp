<?php
	session_start();
	$username = $_SESSION['username'];


 ?>
 <html>
 	<head>
 		<script src="https://use.fontawesome.com/75c52daac5.js"></script>
 		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 		<link rel="stylesheet" href="home.css">
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
		      <a class="nav-item nav-link active" href="#" style="font-size: 20px;padding-left: 15px">Home <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="My_Jobs.php" style="font-size: 20px;padding-left: 15px;color: #FF5733">My Jobs</a>
		      <a class="nav-item nav-link" href="#" style="font-size: 20px;padding-left: 15px;color: #FF5733"><i class="fa fa-bell-o" aria-hidden="true" style="color: white"></i>Notifications</a>
		      <a class="nav-item nav-link" href="Employer_form/Employer.html" style="font-size: 20px;padding-left: 15px;color: #FF5733">Add Jobs</a>
		      <a class="nav-item nav-link btn btn-outline-warning username" role="button" href="#" style="position:absolute;right:20px;color: white;font-weight: bold;font-family: Helvetica;color: color: #FF5733"><?php echo $username ?></a>
		    </div>
		  </div>
		</nav>
			<div class="jumbotron container-fluid">
			  <h1 class="display-3" style = "text-align: center;">Hello, <?php echo $username; ?></h1>
			</div>
		
 	</body>

