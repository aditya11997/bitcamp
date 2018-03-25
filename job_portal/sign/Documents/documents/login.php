<?php
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
 session_start(); //Its better to Start session at the beginning of code
 
$username = $_POST["username"]; // as the method type in the form is "post" so you gave to use post otherwise it wud be $_GET[]
 $password = $_POST["password"];
 
$username = stripslashes($username); // To prevent SQL injection
$password = stripslashes($password);
 //$username = mysql_real_escape_string($username);
 //$password = mysql_real_escape_string($password);
 
//Establishing connection to the database
 
$conn = mysql_connect('localhost','root','');
mysql_select_db('register1',$conn) or die("Error in Connection");
 
if (empty($_POST["username"]) && empty($_POST["password"])) //This is the way to check validations using PHP code but here we are using JS validations so it is not necessary
 {
 echo " Please enter the correct Username and Password ";
 include 'login.php';
 exit();
 }
 
$query = "select * from users where username='$username'" or die("can't select"); //Where profile is the table name
$result = mysql_query($query,$conn);
 
if($result)  // if result is not null
{
     echo "Incorrect";
     $row = mysql_fetch_assoc($result) or die(""); //This function return single row at a time
     // copying the usernames and passwords present in database into temporary variables
     $uname = $row['username'];
     $pwd  = $row['password'];
     
 
    if($username=$uname && $password == $pwd) //if username and password entered are exactly as same as present in database, which means this user has already registered so we will direct him to profile page
    {
     //session_start();
     $_SESSION['Email']=$row['Email'];
     $_SESSION['username']=$row['username']; 
     $_SESSION['password']=$row['password']; 
     $_SESSION['mobile']=$row['mobile'];
        
     //var_dump($_SESSION);
       //exit;
        //Holding the username value in session variable so that it can be used later within the same session reference
 
     /* --Optional-- This is the extra line of code if you want to maintain records of logged in users then it would be helpful.
     $q = "UPDATE profile SET loggedin=1 WHERE username='$username' "; // Just to maintain Logged-in Status
     $res = mysql_query($q,$conn);
      */
 
     header('Location: userProfile.php');  // in success case user will be redirected to profile page
    }
  }
 else
 {
 echo "Incorrect Username or Password";
 }
}
?>
<html>
<body>
	<center><h2>Login</h2></center>
<form action="login.php" method="POST">
	<table border='1' align="center">
		<tr>
			<td>username</td>
			<td><input type="text" name="username">
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
<td align="center"colspan="2"><input type="submit" value="Submit"></td>
		</tr>
</table>
</form>
</body>
</html>