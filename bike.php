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
 
 if($result)
{
  echo "successfully inserted";
 header("location:room.php");
}
  else
   echo "not inserted"; 
}

?>

<form action="/moksha/bike.php" method="POST">
MODEL NAME : <input type="text" id="model" name="model" /><br><br>
cc : <input type="integer" id="cc" name="cc" /><br><br> 
MILEAGE : <input type="integer" id="mileage" name="mileage" /><br><br> 
COST : <input type="integer" id="cost" name="cost" /><br><br> 

	   <input type="submit" id="submit" name="submit"/><br><hr>
</form>
<a href="http://localhost/moksha/room.php">goooo</a>
</body>
</html>