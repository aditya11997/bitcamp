	<!--Navbar-->
	<!-- <?php //include('navbar.php'); ?> -->
	<nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-dark">

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
		        <a class="nav-link" id="About1" href="about.php" style = "font-family: arial"><b>About</b></a>
		      </li>
		      <li class="nav-item" id="about1">
		        <a class="nav-link" id="About1" href="#" style = "font-family: arial"><b>Our Team</b></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" id="register" href="form.php" style = "font-family: arial"><b>Contact Us</b></a>
		      </li>
		      <!-- <li class="nav-item" id="about" name="register">
		        <a class="nav-link" id="register" href="popup.html" style = "font-family: arial"><b>Careers</b></a>
		      </li>
		      -->
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
		        <a href="sign/JobseekerRegister.php" id="register" style="margin-left: 40px;font-family: arial;text-decoration: none;padding-top: 5px;"><b><em>JobSeekerLogin</em></b></a>
		      </li>
		      
			   <li class="nav-item">
		       <button type="button" id="login_button" class="btn btn-outline-success" data-toggle="modal" data-target="Example_Login"><a href = "sign/register.php" style="text-decoration: none;color:white">Employers Login</a></button>
		      </li>
			  
		    </ul>
		    

		  </div>
	</nav>
	