<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action = "register1.php" method = "post">
                  <label>Name  :</label>
                  <input type = "text" name = "username" ><br /><br />
                  <label>Age:</label>
                  <input type="text" name="age"><br><br>
                  <label>Skillset:</label>
                  <input type="text" name="skill"><br><br>

                  <label>Marital status: <br>
                  	<input type="radio" name="optradio">married</label>
                  	<br>
                  <label><input type="radio" name="optradio">divorced</label>
                  <br>
                  <label><input type="radio" name="optradio">single</label>

                  <br><br>




                  <label>Password  :</label>
                  <input type = "password" name = "password" ><br/><br />
                  <label></label>
                  <input type = "submit" value = " Submit "/><br />

    </form>

</body>
</html>
<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
	echo "successfull\n";

}

$name=$_POST["username"];
$age=$_POST["age"];
$pass=$_POST["password"];
$skill=$_POST["skill"];
$status=$_POST["optradio"]; 

echo "$name"."\n";
echo "$pass"."\n";
echo "$age"."\n";
echo "$skill"."\n ";
echo "$status";

 ?>