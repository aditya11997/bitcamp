<?php
	include('userServer.php');
	
?>
<?php 
	$con = mysqli_connect('localhost', 'root', '', 'course');
	$sql = "SELECT course_available from available ORDER BY course_available;";
	$result = mysqli_query($con, $sql) or die("Bad SQL: $sql");

	$opt = "<select name = 'course_available' onmousedown='if(this.options.length>5){this.size=5;}'  onchange='this.size=0;' onblur='this.size=0;' style='padding:0.5%;width:100%' >";
	while ($row = mysqli_fetch_assoc($result)) {
		# code...
		$opt .= "<option value='{$row['course_available']}'>{$row['course_available']}</option>";
	}
	$opt .= "</select>"
 ?>
<?php 
	$con = mysqli_connect('localhost', 'root', '', 'course');
	$sql = "SELECT specialization from specialization ORDER BY specialization;";
	$result = mysqli_query($con, $sql) or die("Bad SQL: $sql");

	$spe = "<select name = 'specialization' onmousedown='if(this.options.length>5){this.size=5;}'  onchange='this.size=0;' onblur='this.size=0;' style='padding:0.5%;width:100%'>";
	while ($row = mysqli_fetch_assoc($result)) {
		# code...
		$spe .= "<option value='{$row['specialization']}'>{$row['specialization']}</option>";
	}
	$spe .= "</select>"
 ?>
 <?php 
	$con = mysqli_connect('localhost', 'root', '', 'course');
	$sql = "SELECT city from city ORDER BY city;";
	$result = mysqli_query($con, $sql) or die("Bad SQL: $sql");

	$city = "<select name = 'preffered_location' onmousedown='if(this.options.length>5){this.size=5;}'  onchange='this.size=0;' onblur='this.size=0;' style='padding:0.5%;width:100%'>";
	while ($row = mysqli_fetch_assoc($result)) {
		# code...
		$city .= "<option value='{$row['city']}'>{$row['city']}</option>";
	}
	$city .= "</select>"
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="test.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-beta/dist/css/bootstrap.css">
	<link rel="stylesheet" href="style1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		$("#dropdownlist").change(function () {
		    var numInputs = $(this).val();
		    var select = new Array();
		    if((numInputs == "12th")||(newInputs == "10th")){

		    	
		    }
		});
	</script>
</head>
<body style="background-color:#DAF7A6">
	<br><br>
	<div class="container">
		<form style="padding:15px;border: 0.5px solid black;border-radius: 10px;background-color: #D4D5D7" method="post" action="userServer.php">
		  <?php include('errors.php'); ?>
		  <div class="row">
		  	<div class="col-md-8"><legend>Register</legend></div>
		  	<div class="col-md-4"><a href="userLogin.php"><h5>Already a member?login</h5></a></div>
		  </div>
		  
		  <hr>
		  <h4 class="text-center">Peronal Details</h4>
		  <div class="form-group">
		    <label for="name" style="font-weight: bold">Name<span class="required">*</span></label>
		    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name">
		  </div>
		  <div class="form-group">
		    <label for="Email Address" style="font-weight: bold;">Email address<span class="required">*</span></label>
		    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="Password" style="font-weight: bold">Password<span class="required">*</span></label>
		    <input type="password" name="password1" class="form-control" id="password" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="Confirm Password" style="font-weight: bold">Confirm Password<span class="required">*</span></label>
		    <input type="password" name="password2" class="form-control" id="ConfirmPassword" placeholder="Confirm Password">
		  </div>
		  <div class="form-group">
		  	<label for="Confirm Password" style="font-weight: bold">Mobile number<span class="required">*</span></label>
		     <div class="input-group mb-2 mb-sm-0">
		       <div class="input-group-addon">+91</div>
		       <input type="text" class="form-control" name="mobileNo" id="mobileNo" placeholder="Enter Mobile Number">
		     </div>
		  </div>
		  <div class="form-group">
		    <label for="Confirm Password" style="font-weight: bold">Current location<span class="required">*</span></label>
		    <input type="text" class="form-control" name="location" id="CurrentLocation" placeholder="Current Location">
		  </div>
		  <div>
	  	  	<label for="age" style="font-weight: bold">Age<span class="required">*</span></label>

	  	  	<input type="text" name="age" style="width: 100%">
	  	  </div>
		  <hr>
		  <h4 class="text-center">Education</h4>
		  <div class="form-group">
		    <label for="HighestEducation" style="font-weight: bold">Highest Education<span class="required">*</span></label>
		    <select id="HighestEducation" class="form-control" name="HighestEducation" id="dropdownlist" onmousedown="if(this.options.length>4){this.size=4;}"  onchange='this.size=0;' onblur="this.size=0;">
	        	<option selected>Doctorate/Phd</option>
	        	<option>Masters/Post-Graduation</option>
	        	<option>Graduation/Diploma</option>
	        	<option>12th</option>
      		</select>
		  </div>
		  <div class="form-group">
		    <label for="course" style="font-weight: bold">Select your course<span class="required">*</span></label>
		    
	        <?php echo $opt; ?>

	  	  </div>
	  	  <div class="form-group">
	  	  	<label for="specialization" style="font-weight: bold">Specialization<span class="required">*</span></label>	
	  	  	<?php echo $spe; ?>
	  	  </div>
	  	  <hr>
	  	  <h4 class="text-center">Help Us Customize your jobs</h4>
	  	  <div class="form-group">
	  	  	<label for="preffered_location" style="font-weight: bold">Preffered Location<span class="required">*</span></label>	
	  	  	<?php echo $city; ?>
	  	  </div>
	  	  <div class="form-group">
	  	  	<label for="work_experience" style="font-weight: bold">Work Experience<span class="required">*</span></label>
	  	  	<select name="Experience" id="Experience" style="width: 100%" class="col-form-label">
	  	  		<option value="fresher">fresher</option>
	  	  		<option value="1 year">1</option>
	  	  		<option value="2 years">2</option>
	  	  		<option value="3 years">3</option>
	  	  		<option value="4 years">4</option>
	  	  		<option value="5 years">5</option>
	  	  		<option value="6 years">6</option>
	  	  		<option value="7 years">6+</option>
	  	  	</select>	
	  	  </div>
	  	  <div class="form-group">
	  	  	<label for="preffered_salary" style="font-weight: bold">Expected Salary<span class="required">*</span></label>
	  	  	
	  	  	<select name="salary" id="Experience" style="width: 100%" class="col-form-label">
	  	  		<option value="1 year"> < 3 Lakhs</option>
	  	  		<option value="2 years">3-4 Lakhs</option>
	  	  		<option value="3 years">4-6 Lakhs</option>
	  	  		<option value="4 years">6-8 Lakhs</option>
	  	  		<option value="5 years">8-10 Lakhs</option>
	  	  		<option value="6 years">10-12 Lakhs</option>
	  	  		<option value="7 years">12+ Lakhs</option>
	  	  	</select>	
	  	  </div>	

		  <div id="inputArea"></div>
		  <div class="form-group">
		  	<label class="form-check-label">
		      <input type="checkbox" class="form-check-input">
		      <small id="emailHelp" class="form-text text-muted">I agreed to the Terms and Conditions governing the use of Jobizza.com.
I have reviewed the default Mailer & Communications settings.</small>
		    </label>
		  </div>
		  </div>
		  <!-- <div class="form-check">
		    <label class="form-check-label">
		      <input type="checkbox" class="form-check-input">
		      Remember Me
		    </label>
		  </div> -->
		  <br>
		  <div class="row">
		  	<div class="col-md-5"></div>
		  	<div class="col-md-6">
		  		<button type="submit" name="reg_user" class="btn btn-primary btn-lg ">Register Now</button>
		  	</div>
		  </div>
		  
		</form><br><br>
		</div>
	
</body>
</html>