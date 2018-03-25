<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
  $errors = array(); 

$link = mysqli_connect("localhost", "root", "", "employer");

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
  $Job_Title = mysqli_real_escape_string($link,$_POST['job_title']);
  $Department = mysqli_real_escape_string($link,$_POST['department']);
  $Company_Name = mysqli_real_escape_string($link,$_POST['company_Name']);
  $Job_Location = mysqli_real_escape_string($link,$_POST['job_location']);
  $Expected_Salary = mysqli_real_escape_string($link,$_POST['salary']);
  $Education = mysqli_real_escape_string($link,$_POST['education']);
  $Job_Type = mysqli_real_escape_string($link,$_POST['job_type']);
  $Job_Description = mysqli_real_escape_string($link,$_POST['job_description']);
}

//form validation
    if (empty($Job_Title)) { array_push($errors, "Job Title is required"); }
    if (empty($Department)) { array_push($errors, "Job Title is required"); }
    if (empty($Company_Name)) { array_push($errors, "Company Name is required"); }
    if (empty($Job_Location)) { array_push($errors, "Job Location is required"); }
    if (empty($Expected_Salary)) { array_push($errors, "Password is required"); }
    if (empty($Education)) { array_push($errors, "Education is required"); }
    if (empty($Job_Type)) { array_push($errors, "Job_Type is required"); }
    if (empty($Job_Description)) { array_push($errors, "Description is required"); }
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Attempt insert query execution
$sql = "INSERT INTO addjobs(job_title,Department,company_name,job_location,expected_salary,education,job_type,job_description) VALUES ('$Job_Title','$Department','$Company_Name','$Job_Location','$Expected_Salary','$Education','$Job_Type','$Job_Description')";


if(mysqli_query($link, $sql)){
  $_SESSION['job_title'] = $Job_Title;
  $_SESSION['company_Name'] = $Company_Name;
  $_SESSION['job_location'] = $Job_Location;
  $_SESSION['salary'] = $Expected_Salary;
  $_SESSION['education'] = $Education; 
  $_SESSION['job_type'] = $Job_Type;
  $_SESSION['job_description'] = $Job_Description;

  echo "<script>window.open('../Add_Jobs.php','_self')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>