<?php
error_reporting(0);
include('inc/db.php');

$sql="SELECT * FROM documents";

$res=mysqli_query($con,$sql);



?>
<html>
<head>
	<title>Documents</title>
	<style type="text/css">
		div {
    background-color:white;
    width: 85%;
    border: 45px solid orange;
    padding: 25px;
    margin: 25px;
			}
		a{
    background-color:grey;
    color: white;
    padding: 8px 10px;
    text-align:center;
    text-decoration: none;
    display: inline-block;
    border-left-style: ridge;
}

.add{
	background-color:grey;
}

a:hover{
    background-color:#32CD32;
}
	</style>
</head>
<body>
	<div><a href="upload.php" class="add">Add new Document:</a><br><br>

	<?php
	while($row=mysqli_fetch_array($res,MYSQLI_NUM)){
		$id=$row['id'];
		$name=$row['name'];
		$path=$row['path'];
		echo $id . " " .  $name .":"  . "<br><a href='download.php?dow=$path'> <br>Download<br></a><br><br>";
	}
?>
</div>
</body>
</html>