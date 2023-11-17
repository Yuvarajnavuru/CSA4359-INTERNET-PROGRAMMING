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
$database="jigelu";

$model=$_POST['model'];
$cc=$_POST['cc'];
$mileage=$_POST['mileage'];
$cost=$_POST['cost'];

$con=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO `bike` (`model`, `cc`, `mileage`, `cost`) VALUES ('$model', '$cc', '$mileage', '$cost')";

 $result = mysqli_query($con,$sql);
 
 if($result){
  echo "successfully inserted";
  header("location:hotelroom.php");
}
  else
   echo "not inserted"; 
}

?>

<form action="/moksha/room.php" method="POST">
USER NAME : <input type="text" id="user" name="user" /><br><br>
PASSWORD : <input type="text" id="pass" name="pass" /><br><br> 
CPASSWORD : <input type="text" id="cpass" name="cpass" /><br><br>
	   <input type="submit" id="submit" name="submit"/><br><hr>
</form>
</body>
</html>