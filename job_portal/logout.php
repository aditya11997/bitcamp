<?php 
	session_start();
	session_destroy();
	echo "<script>window.open('../test.php','_self')</script>";

 ?>