<?php 
	$query = "SELECT * FROM myjobs WHERE job_title ='$job_title'";
	$results = mysqli_query($link, $query);
 ?>