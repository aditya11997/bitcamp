<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "folder");

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
  $Jobseeker_name = mysqli_real_escape_string($link,$_POST['name']);
  $Job_title = mysqli_real_escape_string($link,$_POST['title']);
  $Job_Location = mysqli_real_escape_string($link,$_POST['location']);
  $Job_Type = mysqli_real_escape_string($link,$_POST['select1']);
  $Job_Description = mysqli_real_escape_string($link,$_POST['descr']);
}
$Jobseeker_name=$_POST['name'];
$Job_title=$_POST['title'];
$Job_location=$_POST['location'];
$Job_Type=$_POST['select1'];
$Job_Description=$_POST['descr'];
 
// Attempt insert query execution
$sql = "INSERT INTO jobseeker(Jobseeker_name,Job_title,Job_location,Job_Type,Job_Description) VALUES ('$Jobseeker_name','$Job_title','$Job_location','$Job_Type','$Job_Description')";

if(mysqli_query($link, $sql)){
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

