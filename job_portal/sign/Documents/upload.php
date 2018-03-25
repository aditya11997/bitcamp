<?php

include('inc/db.php');

if(isset($_POST['submit'])) {

	$doc_name = $_POST['doc_name'];
	$name = $_FILES['myfile']['name'];
	$tmp_name  = $_FILES['myfile']['tmp_name'];

	if ($name) {
		$Location="documents/$name";
		move_uploaded_file($tmp_name,$Location);
		$query = mysqli_query($con,"INSERT INTO documents (name,path) VALUES ('$doc_name','$Location')");
		header('Location:index.php');

	}
	else
		die("Please select a file");
	
}

?>


<html>
<head>
	<title>Upload Documents</title>
	<style type="text/css">
	div {
    background-color: white;
    width: 85%;
    border: 25px solid yellow;
    padding: 25px;
    margin: 25px;

}
</style>
</head>
<body>
<div>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<label for="name">Document Name</label>
	<input type="text" name="doc_name">
	<input type="file" name="myfile">
	<input type="submit" name="submit" value="Upload">
</form>
</div>
</body>
</html>