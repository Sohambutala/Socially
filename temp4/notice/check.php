<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/temp/session.php');
$connection = mysqli_connect("localhost", "root", "","student");

$first= $_SESSION['first'];
$email= $_SESSION['emailid'];

		$query = mysqli_query($connection,"select * from details where first_name='$first' AND email_id='$email'");
		$rows = mysqli_num_rows($query);
		
		if ($rows == 1) 
		{
		header("location: log.php"); 
		}
		else
		{
		
		header("location: select_teacher_notice.php"); 	
		}
		mysqli_close($connection);


?>