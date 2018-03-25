<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php 
	
	include 'config.php';


 ?>



<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Women Registration Form</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="POST" enctype="multipart/form-data">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="age" class="cols-sm-2 control-label">age</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="age" id="age"  placeholder="Enter your age"/>
								</div>
							</div>
						</div>

<h3>choose your marital status</h3>
						<div class="radio">
  <label><input type="radio" name="optradio">single</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">married</label>
</div>
<div class="radio ">
  <label><input type="radio" name="optradio" >divorced</label>

</div>

<div class="radio">
  <label><input type="radio" name="optradio" >separated</label>
  
</div>




<h3>do you have bank account?</h3>
						<div class="radio">
  <label><input type="radio" name="optbank">yes</label>
</div>
<div class="radio">
  <label><input type="radio" name="optbank">no</label>
</div>














						<div class="form-group">
  <label for="comment">skillSets</label>
  <textarea class="form-control" rows="5" id="comment" name="skillset"></textarea>
</div>


 <div class="form-group">
    <label for="exampleInputFile">Upload your  photoId</label>
    <input type="file" class="form-control-file" name="photo" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Upload your photoid here</small>
  </div>



						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>








						
						<div class="form-group ">
							 <input type = "submit" value = "Submit" name="submitButton" /><br />

							<button type="button" class="btn btn-primary btn-lg btn-block login-button">Back to home</button>
							
						</div>
						<div class="login-register">
				            <a href="index.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

		<?php 

			if(isset($_POST["submitButton"])){

				echo "hello";







				$name=$_POST['name'];
				$email=$_POST['email'];
				$age=$_POST['age'];
				$status=$_POST['optradio'];
				$bank=$_POST['optbank'];
				$photo=$_FILES['photo'];
				$password=$_POST['password'];
				$skillset=$_POST["skillset"];
				echo "$name";








				$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}












				$query="INSERT INTO women(name,age,skillset,maritalStatus,email,photoid) VALUES('$name',$age,'$skillset','$status','$email','$target_file')";
				echo "$query";




				if (mysqli_query($link, $query)) {
 			 	   echo "successfully uploaded";
				}



















































			}






















		 ?>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>