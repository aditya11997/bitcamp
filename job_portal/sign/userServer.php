<?php 
	session_start();

	// variable declaration
	$_SESSION['location'] = "";
	$_SESSION['name'] = '';
	$_SESSION['mobileNo'] = '';
	//Personal Info
	$email    = "";
	$name = "";
	$mobileNo = "";
	$location = "";
	$age = "";
	//Educational
	$HighestEducation = "";
	$course_available = "";
	$specialization = "";
	//Customized jobs
	$preffered_location = "";
	$Experience = "";
	$salary = "";

	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'user');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		//$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password2']);
		$mobileNo = mysqli_real_escape_string($db, $_POST['mobileNo']);
		$location = mysqli_real_escape_string($db, $_POST['location']);
		$age = mysqli_real_escape_string($db, $_POST['age']);

		$HighestEducation = mysqli_real_escape_string($db, $_POST['HighestEducation']);
		$course_available = mysqli_real_escape_string($db, $_POST['course_available']);
		$specialization = mysqli_real_escape_string($db, $_POST['specialization']);

		$preffered_location = mysqli_real_escape_string($db, $_POST['preffered_location']);
		$Experience = mysqli_real_escape_string($db, $_POST['Experience']);
		$salary = mysqli_real_escape_string($db, $_POST['salary']);



		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($mobileNo)) { array_push($errors, "Mobile Number is required"); }
		if (empty($location)) { array_push($errors, "location is required"); }

		if (empty($HighestEducation)) { array_push($errors, "HighestEducation is required"); }
		if (empty($course_available)) { array_push($errors, "course is required"); }
		if (empty($specialization)) { array_push($errors, "specialization is required"); }

		if (empty($preffered_location)) { array_push($errors, "name is required"); }
		if (empty($Experience)) { array_push($errors, "Work Experience is required"); }
		if (empty($salary)) { array_push($errors, "Expected Salary is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = $password_1;//encrypt the password before saving in the database
			$query = "INSERT INTO user_info (name,email_id, password,mobile_no,current_location,age,highest_education,course,specialization) 
					  VALUES('$name', '$email', '$password','$mobileNo','$location','$age','$HighestEducation','$course_available','$specialization')";

			
			
			
			mysqli_query($db,$query);

			$_SESSION['name'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: JobseekerHome.php');
		}
	}

	

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			
			$query = "SELECT * FROM user_info WHERE email_id='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				//session_start();
				$_SESSION['email'] = $email;
				$_SESSION['name']
				//$_SESSION['success'] = "You are now logged in";
				//header('location: home.php');

				echo "<script>window.open('JobseekerHome.php','_self')</script>";
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>