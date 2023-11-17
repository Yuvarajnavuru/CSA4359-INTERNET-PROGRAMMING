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
$database="moksha";

$user=$_POST['user'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

$con=mysqli_connect($servername,$username,$password,$database);

$sql="INSERT INTO `root` (`user`, `pass`, `cpass`) VALUES ('$user', '$pass', '$cpass');";

 $result = mysqli_query($con,$sql);
 
 if($result)
  echo "successfully inserted";
  else
   echo "not inserted"; 
}

?>

<form action="/moksha/hotelroom.php" method="POST">
USER NAME : <input type="text" id="user" name="user" /><br><br>
PASSWORD : <input type="text" id="pass" name="pass" /><br><br> 
CPASSWORD : <input type="text" id="cpass" name="cpass" /><br><br>
	   <input type="submit" id="submit" name="submit"/><br><hr>
</form>
</body>
</html>
    <center><title>Hotel Room Booking</title></center>
    <style>
        /* Add some basic styling for better presentation */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Hotel Room Booking</h1>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="room">Select a Room:</label>
        <select id="room" name="room" required>
            <option value="101">Room 101 - $100/night</option>
            <option value="102">Room 102 - $150/night</option>
            <option value="103">Room 103 - $120/night</option>
            <!-- Add more room options as needed -->
        </select><br><br>

        <label for="checkin">Check-In Date:</label>
        <input type="date" id="checkin" name="checkin" required><br><br>

        <label for="checkout">Check-Out Date:</label>
        <input type="date" id="checkout" name="checkout" required><br><br>

        <input type="submit" value="Book Room">
    </form>
</body>
</html>
