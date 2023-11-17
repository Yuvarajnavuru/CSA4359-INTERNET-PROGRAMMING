<!DOCTYPE html>
<html>
<head>
<title>Connectivity</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$servername="localhost";
$username="root";
$password="";
$database="yuvaraj";

$user=$_POST['user'];
$pass=$_POST['pass'];

$con=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO login (user, pass) VALUES ('$user', '$pass')";

 $result = mysqli_query($con,$sql);
 
 if($result)
  echo "successfully inserted";
  else
   echo "not inserted"; 
}

?>

<form action="/moksha/login.php" method="POST">
USER NAME : <input type="text" id="user" name="user" /><br><br>
PASSWORD : <input type="text" id="pass" name="pass" /><br><br>  
	   <input type="submit" id="submit" name="submit"/><br><hr>
</form>
</body>
</html>