<!DOCTYPE html>
<html lang="en">
<head>
	<title>bootstrap beta</title>
	<!--Required Meta Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-beta\dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="test.css">
    <link rel="stylesheet" type="text/css" href="button.css">
    <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
    <script src="https://use.fontawesome.com/4ba141451f.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- 	<script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
 -->	<style type="text/css">
		#part2{
			color:red;
			font-family: arial;
			font-weight: bold;
			text-align: center;
			padding-top: 5rem;
			font-size: 20px;
			height: 10rem;
			background: red; /* For browsers that do not support gradients */
		  	background: -webkit-linear-gradient(left, #F0174C , #BF5770); /* For Safari 5.1 to 6.0 */
		 	background: -o-linear-gradient(right, #F0174C, #BF5770); /* For Opera 11.1 to 12.0 */
		  	background: -moz-linear-gradient(right, #F0174C, #BF5770); /* For Firefox 3.6 to 15 */
		  	background: linear-gradient(to right, #F0174C ,#BF5770); /* Standard syntax */
		}
		#row2{
			margin-top: 1rem;
		}
		.card-body{
			background-color: #D9E4E4;
		}
		.center{
			margin-left: 60%;
		}
		.img-center{
			margin-left: 35%;
			margin-bottom: 1rem;
			margin-top: 1rem;
		}
		#secure{
			position: relative;
			left: 6rem;
		}
		.h5{
			color: white;
		}
		#brand{
			text-decoration: underline;
			color:#1F6013;
		}
	</style>
	<!--Bootstrap CSS-->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->

</head>
<body>
	<?php include('navbar.php'); ?>
	<!--Navbar-->
	<!-- <?php //include('navbar.php'); ?> -->
	<!-- <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">

	  <a class="navbar-brand" href="#" style="color: #EA8021"><img src="images/logo.png" width="150px" height="60px"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		      	 <span class="glyphicon glyphicon-home"></span>
		        <a class="nav-link" href="#" solid white" style = "font-family: arial"><b>Home</b><span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item" id="About">
		        <a class="nav-link" id="About1" href="#" style = "font-family: arial"><b>About</b></a>
		      </li>
		      <li class="nav-item" id="about1">
		        <a class="nav-link" id="About1" href="#" style = "font-family: arial"><b>Our Team</b></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" id="register" href="popup.html" style = "font-family: arial"><b>Contact Us</b></a>
		      </li>
		      <li class="nav-item" id="about" name="register">
		        <a class="nav-link" id="register" href="popup.html" style = "font-family: arial"><b>Careers</b></a>
		      </li>
		     
		     <div class="dropdown show">
			  <a class="btn dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "font-family: arial">
			    <b>Jobs</b>
			  </a>

			  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			    <a class="dropdown-item" href="#">Jobs By Location</a>
			    <a class="dropdown-item" href="#">Jobs By Industry</a>
			    <a class="dropdown-item" href="#">Jobs By skill</a>
			    <a class="dropdown-item" href="#">Jobs By position</a>
			    <a class="dropdown-item" href="#">Goverment Jobs</a>
			  </div>
			 
			 </div>
			 <li class="nav-item" id="about" name="register">
		        <a class="nav-link" id="register"  href="jobs/Search_Jobs.php" style="margin-left: 40px;font-family: arial"><b><em>JobSeekerLogin</em></b></a>
		      </li>
			   <li class="nav-item">
		       <button type="button" id="login_button" class="btn btn-outline-success" data-toggle="modal" data-target="Example_Login"><a href = "sign/register.php" style="text-decoration: none;color:white">Employers Login</a></button>
		      </li>
			  
		    </ul>
		    
		    
		  </div>
	</nav>  -->
		
	
	
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item">
				      <img class="d-block w-100" height="auto" width="100%" src="images/img5.jpeg" alt="First slide">
				    </div>
				    <div class="carousel-item active">
				      <img class="d-block w-100" height="auto" width="100%" src="images/img2.jpg" alt="Second slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" height="auto" width="100%" src="images/img9.jpg" alt="Third slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>  
		<br>
		<!-- <div class="container" id="JobSeeker_Login">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-6"><h2 class="text-uppercase">Job Seekers May Login Here</h2></div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-6">
					<form class="form-inline">
			  			<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInputName2" placeholder="Enter UserName">
						 <div class="input-group mb-2 mr-sm-2 mb-sm-0">
						 	<input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="EnterPassword">
						 </div>
						 <a href="jobs/Search_Jobs.php" class="btn btn-success">Login</a>
					</form>
				</div>
			</div>
		</div> -->
		<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-8"><h5 class="text-uppercase">Most amazing jobs listed</h5></div>
			<div class="col-sm-1"></div>
		</div>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4"><p class="text-uppercase">Discover great jobs suiting your needs</p></div>
			<div class="col-sm-4"></div>
		</div>
		<div class="row">
			<div class="col-sm-4"><h4 class="text-uppercase">Latest listings</h4></div><br><br><hr>
			<div class="col-sm-4"></div>
			<div class="col-sm-4"></div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="card">
					<div class="view overlay hm-white-slight">
		                <img src="images/img13.jpg" class="img-fluid" alt="">
		                <a href="#">
		                    <div class="mask"></div>
		                </a>
		            </div>
					<div class="card-body">
		                <!--Title-->
		                <h4 class="card-title">Graphic Designer</h4>
		                <!--Text-->
		                <p class="card-text"><strong>Bengaluru</strong></p>
		                <p class="card-text"><strong>Cisco Systems Ltd.</strong></p>
		                <p class="card-text"><strong>Full Time</strong></p>
		                <p class="card-text">Graduates/Post Graduates in Computer Science or equivalent with 3-5 Years of Work Experience working on Cisco Routers and possessing the requisite skillsets may apply.<br><strong>Cisco Certified Associates/Professionals would be preffered,although not necessary to apply.</strong></p>
		                <p class="card-text">6-9 Lakh &#8377;/annum</p>
		                <a href="sign/apply.html" class="btn btn-primary">Apply / Know More</a>
	            	</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="view overlay hm-white-slight">
		                <img src="images/img14.png" class="img-fluid" alt="">
		                <a href="#">
		                    <div class="mask"></div>
		                </a>
		            </div>
					<div class="card-body">
		                <!--Title-->
		                <h4 class="card-title">Software Tester</h4>
		                <!--Text-->
		                <p class="card-text"><strong>Mumbai</strong></p>
		                <p class="card-text"><strong>Remtech Inc.</strong></p>
		                <p class="card-text"><strong>Part Time</strong></p>
		                <p class="card-text">B.Tech in Computer Science with 3-5 Years of Work Experience as a Software Tester may apply.</p>
		                <p class="card-text">4-5 Lakh &#8377;/annum</p>
		                <a href="sign/apply.html" class="btn btn-primary">Apply / Know More</a>
	            	</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="view overlay hm-white-slight">
		                <img src="images/img15.jpg" class="img-fluid" alt="">
		                <a href="#">
		                    <div class="mask"></div>
		                </a>
		            </div>
					<div class="card-body">
		                <!--Title-->
		                <h4 class="card-title">Full Stack Web Developer</h4>
		                <!--Text-->
		                <p class="card-text"><strong>Bhubaneshwar</strong></p>
		                <p class="card-text"><strong>Tech Sinister Ltd.</strong></p>
		                <p class="card-text"><strong>Remote/Work from home</strong></p>
		                <p class="card-text">Graduates/Postgraduates in Any Stream with minimum 5 Years of Work Experience as a Full Stack Web Developer may apply.</p>
		                <p class="card-text">Developers must be familiar with server-side frameworks such as Node,laravel, or CakePhp,along with server side front end technologies like react or angular.</p>
		                <p class="card-text">5-5.5 Lakh &#8377;/annum</p>
		                <a href="sign/apply.html" class="btn btn-primary">Apply / Know More</a>
	            	</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="card">
					<div class="view overlay hm-white-slight">
		                <img src="images/img16.jpg" class="img-fluid" alt="">
		                <a href="#">
		                    <div class="mask"></div>
		                </a>
		            </div>
					<div class="card-body">
		                <!--Title-->
		                <h4 class="card-title">HR Manager</h4>
		                <!--Text-->
		             	<p class="card-text"><strong>New Delhi</strong></p>
		                <p class="card-text"><strong>Signa Ttk Ltd.</strong></p>
		                <p class="card-text"><strong>Full Time</strong></p>
		                <p class="card-text">Freshers/Experienced MBA holders from Indian/foreign University with good academic record and excellent communication skills looking for a career boost may apply.</p>
		                <p class="card-text">Candidates should be well versed in recritment,payroll,leave management and other HR functions.</p>
		                <p class="card-text">5-5.5 Lakh &#8377;/annum</p>
		                <a href="sign/apply.html" class="btn btn-primary">Apply / Know More</a>
	            	</div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-sm-10"></div>
			<div class="col-sm-2" id="view-more"><h6>View More>></h6></div>
		</div>
		<hr>
		<div class="row">
			<h2 class="text-uppercase" style="color: #417737">In a nutshell</h2>
		</div><br>
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="view overlay hm-white-slight">
		                <img src="images\motto.jpg" class="img-fluid" alt="">
		                <a href="#">
		                    <div class="mask"></div>
		                </a>
		            </div>
					<div class="card-body">
		                <!--Title-->
		                <h4 class="card-title">Our Motto</h4>
		                <!--Text-->
		                <p class="card-text">We believe in providing quality services to our members.Customer Staisfaction is our top priority.We believe in quality par-excellence........</p>
		                <a href="#" class="btn btn-primary">Read More</a>
	            	</div>
	            </div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="view overlay hm-white-slight">
		                <img src="images/support2.jpg" class="img-fluid" alt="">
		                <a href="#">
		                    <div class="mask"></div>
		                </a>
		            </div>
					<div class="card-body">
		                <!--Title-->
		                <h4 class="card-title">Support and Assistance</h4>
		                <!--Text-->
		                <p class="card-text">Our Support staff would available all along in helping you get the best out of our services.You would find a reliable support system in.......</p>
		                <a href="#" class="btn btn-primary">Read More</a>
	            	</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="view overlay hm-white-slight">
		                <img src="images/industryconnect.gif" class="img-fluid" alt="">
		                <a href="#">
		                    <div class="mask"></div>
		                </a>
		            </div>
					<div class="card-body">
						<!--Title-->
		                <h4 class="card-title">Good Industry Connect</h4>
		                <!--Text-->
		                <p class="card-text">We believe in maintaining a healthy industrial relationship.We have a very professional working relationship with all our jobseekers as well as recruiters.......</p>
		                <a href="#" class="btn btn-primary">Read More</a>
	                </div>
				</div>
			</div>
		</div>
		</div>
		<br>
		<hr>
		<div class="container">
			<div class="row">
			<div class="col-12 text-uppercase" style="color: #417737;font-weight: bold;font-family: arial;padding-top: 1rem;font-size: 2rem;padding-bottom: 0;border-bottom: 1px solid grey;"><p>Premium Features and Services</p></div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-4">
					<div class="card" style="width: 20rem;">
					  <img class="card-img-top" src="images/img11.jpeg" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title">Premium Jobs</h4>
					    <p class="card-text">Try out our all new premium jobs and get additional milege in your job search</p>
					    <a href="#" class="btn btn-primary">Try Now</a>
					  </div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="col-sm-4">
					<div class="card" style="width: 20rem;">
					  <img class="card-img-top" src="images/img10.jpeg" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title">Resume Highlighter</h4>
					    <p class="card-text">Try out Resume highlighter and get your resume highlighted to our top employers</p>
					    <a href="#" class="btn btn-primary">Try Now</a>
					  </div>
					</div>
				</div>
				</div>
				<div class="col-sm-4">
					<div class="col-sm-4">
					<div class="card" style="width: 20rem;">
					  <img class="card-img-top" src="images/img12.jpg" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title">Resume Booster</h4>
					    <p class="card-text">Try out our exclusive resume writing tutorials</p>
					    <a href="#" class="btn btn-primary">Try Now</a>
					  </div>
					</div>
				</div>
				</div>
			</div>
			<br><br><hr>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10"> 
					<div class="card">
					  <div class="card-header" style="text-align: center;font-family: arial;font-weight: bold;background-color: #7CD5FF;font-size: 20px;">
					    Join our Mailing List to receive weekly updates
					  </div>
					  <div class="card-body" style="background-color: #000000;color: white">
					    <h4 class="card-title">Subscribe to our Online Newsletter</h4>
					    <form>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>
						</form>
					    <a href="#" class="btn btn-primary">Sign Up</a>
					  </div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
		<div class="container">
		<hr>
		<div class="row">
			<div class="col-12 text-uppercase" style="color: #417737;font-weight: bold;font-family: arial;padding-top: 1rem;font-size: 2rem;padding-bottom: 0;border-bottom: 1px solid grey;"><p>In a nutshell</p></div>
		</div>
		<div class="divider"></div>
		<div class="row">
			<div class="col-4"><img class = "img-center" src="images/download.png" width="30%" align="center"><p class="text-uppercase text-center">We Dont spam</p></div>
			<div class="col-4"><i class="large material-icons text-text text" style="font-size:8rem;color:##417737;"><span class="center">perm_identity</span></i><p class="text-uppercase text-center">More than 100 recruiters</p></div>
			<div class="col-4"><img class = "img-center" src="images/customize.jpg" width="30%" align="center"><p class="text-uppercase text-center">We Customize jobs as per your requirement</p></div>
		</div>
		<div class="row">
			<div class="col-4"><i class="large material-icons text-text text" style="font-size:8rem;color:##417737;"><span class="center">https</span></i><p class="text-uppercase text-center" style="display: block;">Secured</p></div>
			<div class="col-4"><img class = "img-center" src="images/support.jpg" width="30%" align="center"><p class="text-uppercase text-center">24/7 support</p></div>
			<div class="col-4"></div>
		</div>
		<div class="row">
			<div class="col-12 text-uppercase" style="color: #417737;font-weight: bold;font-family: arial;padding-top: 1rem;font-size: 2rem;padding-bottom: 0;border-bottom: 1px solid grey;"><p>Top recruiters</p></div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img class="d-block w-100" height="auto" src="images/recruiters.jpg" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" height="auto" src="images/img18.jpg" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100" height="auto" src="images/img17.jpg" alt="Second slide">
					    </div>
					    
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
				</div>
			</div>
		</div>
	</div>
			<!--
			<div class="col-12">
				<img src="images/recruiters.jpg">
			</div>
			-->
	<!--
	<div class="left" id="social">
			<h6 style="text-align: center;">&copyAll Rights Reserved with FelonyJobs.com</h6>
			<h5 id="quicklinks">Quick links</h5>
			<h5>
				Connect with Us:
			</h5>
			<ul>
				<li><a href="#">facebook&nbsp<i class="fa fa-facebook-official" aria-hidden="true" style="color: white"></i></a></li>
				<li><a href="#">Google+&nbsp<i class="fa fa-google-plus" aria-hidden="true" style="color: red"></i></a></li>
				<li><a href="#">twitter&nbsp<i class="fa fa-twitter" aria-hidden="true" style="color: blue"></i></a></li>
				<li><a href="$">instagram&nbsp<i class="fa fa-instagram" aria-hidden="true" style="color: white"></i></a></li>
				<li><a href="#">linkedin&nbsp<i class="fa fa-linkedin-square" aria-hidden="true" style="color: white"></i></a></li>
			</ul>
		</div>
	-->	
	</div>
	<!-- Modal -->
	<div class="modal fade" id="Employer_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	<?php include('footer.php'); ?>
	<!-- <footer class="footer-fluid">
		<div class="container-fluid" id="footer">
			<br>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6"><h6 style="text-align: center;">&copyAll Rights Reserved with Jobizza</h6></div>
				<div class="col-sm-3"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-3">
					<h5>
						Connect with Us:
					</h5>
				</div>
				<div class="col-sm-3"><h5>JobSeekers:</h5></div>
				<div class="col-sm-3"><h5>Employers:</h5></div>
				<div class="col-sm-3"><h5>Information:</h5></div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<ul class="footer-list-item">
						<li><a href="#">facebook&nbsp<i class="fa fa-facebook-official" aria-hidden="true" style="color: white"></i></a></li>
						<li><a href="#">Google+&nbsp<i class="fa fa-google-plus" aria-hidden="true" style="color: red"></i></a></li>
						<li><a href="#">twitter&nbsp<i class="fa fa-twitter" aria-hidden="true" style="color: blue"></i></a></li>
						<li><a href="$">instagram&nbsp<i class="fa fa-instagram" aria-hidden="true" style="color: white"></i></a></li>
						<li><a href="#">linkedin&nbsp<i class="fa fa-linkedin-square" aria-hidden="true" style="color: white"></i></a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="footer-list-item">
						<li><a href="#">Register Now</a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">Search Jobs</a></li>
						<li><a href="#">Premium Jobs</a></li>
						<li><a href="$">Access Newsletter</a></li>
						<li><a href="#">Resume writing</a></li>
						<li><a href="#">Profile Enhancement</a></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="footer-list-item">
						<li><a href="#">Register Now</a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">Post Jobs</a></li>
						<li><a href="#">Update Job</a></li>
						<li><a href="$">Manage Responses</a></li>
					
					</ul>
				</div>
				<div class="col-sm-3">
					<ul class="footer-list-item">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="$">FAQs</a></li>
					
					</ul>
				</div>
			</div>
			
		</div>
	</footer> -->
		
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i>
	</button>
	<!--Necessary script tag-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$('body').scrollspy({ target: 'about'});
	</script>
	<script type="text/javascript">
		// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
		    document.documentElement.scrollTop = 0; // For IE and Firefox
		}
		$('#myBtn').click(function(e){

                    e.preventDefault();

                    $('html,body').animate({scrollTop: 0}, 300);

                });


	</script>
	
</body>
</html>