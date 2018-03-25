<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
  $errors = array(); 

$link = mysqli_connect("localhost", "root", "", "folder");

/*if (isset($_POST['job_title'])) {
    $Job_Title = $_POST['job_title'];
}
if (isset($_POST['company_Name'])) {
    $Company_Name = $_POST['company_Name'];
}
if (isset($_POST['job_location'])) {
    $Job_Location = $_POST['job_location'];
}
if (isset($_POST['salary'])) {
    $Expected_Salary = $_POST['salary'];
}
if (isset($_POST['job_type'])) {
    $Job_Type = $_POST['job_type'];
}
if (isset($_POST['job_description'])) {
    $Job_Description = $_POST['job_description'];
}
*/
if(isset($_POST['submit'])){
  $Job_Name = mysqli_real_escape_string($link,$_POST['jobseeker_name']);
  $Job_Title = mysqli_real_escape_string($link,$_POST['job_title']);
  $Job_Location = mysqli_real_escape_string($link,$_POST['job_location']);
  $Department = mysqli_real_escape_string($link,$_POST['department']);
  $Job_Description = mysqli_real_escape_string($link,$_POST['job_description']);
}

//form validation
    if (empty($Job_Name)) { array_push($errors, "Job Name is required"); }
    if (empty($Job_Title)) { array_push($errors, "Job Title is required"); }
    if (empty($Job_Location)) { array_push($errors, "Job Location is required"); }
    if (empty($Department)) { array_push($errors, "department is required"); }
    if (empty($Job_Description)) { array_push($errors, "Description is required"); }
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Attempt insert query execution
$sql = "INSERT INTO jobseeker(Jobseeker_name,age,Preffered_Job_City,Qualification,Experience) VALUES ('$Job_Name','$Job_Title','$Job_Location','$Department','$Job_Description')";


if(mysqli_query($link, $sql)){
  $_SESSION['Jobseeker_name'] = $Job_Name;
  $_SESSION['job_title'] = $Job_Title;
  $_SESSION['job_location'] = $Job_Location;
  $_SESSION['department'] = $Department;
  $_SESSION['job_description'] = $Job_Description;

  echo "<script>window.open('success.php','_self')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>