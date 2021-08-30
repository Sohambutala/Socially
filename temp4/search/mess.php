<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/temp4/login.php');
$connection = mysqli_connect("localhost", "root", "","student");

$reci=$_SESSION['login_user'];

		$query = mysqli_query($connection,"select * from message where reciver='$reci'");
		$rows = mysqli_num_rows($query);
		
		if($rows >=1)
		{
	while($extract = mysqli_fetch_array($query)) {
	$name=$extract['sender'];
		
		$query1 = mysqli_query($connection,"select * from details where roll_no='$name'");
		$row = mysqli_num_rows($query1);
		if($row == 1)
		{
		 $execute=mysqli_fetch_assoc($query1);
		 $first_name=$execute['first_name'];
		 $last_name=$execute['last_name'];
		}
		else
		{
		$query1 = mysqli_query($connection,"select * from faculty where roll_no='$name'");	
		$execute=mysqli_fetch_assoc($query1);
		$first_name=$execute['first_name'];
		 $last_name=$execute['last_name'];
		}
		
	echo "<span>" . $first_name ." ".$last_name. "</span>: <span>" . $extract['date']." ". $extract['message'] . "</span><br />";
		}		
		}

		else
		{
			echo "Sorry no messages in your inbox";
		}
		
		
		
		mysqli_close($connection);


?>