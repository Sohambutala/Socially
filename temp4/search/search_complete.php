<?php
$connection = mysqli_connect("localhost", "root", "","student");
//include( $_SERVER['DOCUMENT_ROOT'] . '/temp2/session.php');
session_start();
$roll_no=$_SESSION['r'];

$query = mysqli_query($connection,"select * from details where roll_no='$roll_no'");
$rows = mysqli_num_rows($query);
if ($rows == 1) 
{
$row = mysqli_fetch_array($query);	
echo"First Name : ".$row[1]; 
echo "<br>";
echo"Last Name : ".$row[2];
echo "<br>";
echo"Email ID : ".$row[5];
echo "<br>";
echo"Mobile Number : ".$row[4];
echo "<br>"; 
}

else
{
	$query = mysqli_query($connection,"select * from faculty where roll_no='$roll_no'");
$rows = mysqli_num_rows($query);
		if ($rows == 1) 
{
$row = mysqli_fetch_array($query);	
echo"First Name : ".$row[1]; 
echo "<br>";
echo"Last Name : ".$row[2];
echo "<br>";
echo"Email ID : ".$row[5];
echo "<br>";
echo"Mobile Number : ".$row[4];
echo "<br>"; 
}
		
		
	}
		
		
		mysqli_close($connection);



?>

<html>
<head>
</head>
<body>
<button onclick="location.href='message.php'">Message</button>
</body>
</html>