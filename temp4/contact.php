<?php
$error='';

$connection = mysqli_connect("localhost", "root", "","student");

if (isset($_POST['quer']))
{
	$roll = mysqli_real_escape_string($connection, $_POST['roll']);
	$que = mysqli_real_escape_string($connection, $_POST['que']);
	$notes = mysqli_real_escape_string($connection,$_POST['notes']);
	
	$connection = mysqli_connect("localhost", "root", "","student");
	
	$query = mysqli_query($connection,"select * from details where roll_no='$roll'");
	$rows = mysqli_num_rows($query);
	
		$query = mysqli_query($connection,"select * from faculty where roll_no='$roll'");
		$row = mysqli_num_rows($query);
	
	
	
	if($rows==0 && $row==0)
	{
		$error="Sorry this roll number has not been registered.";
	}
	else
	{
			
					  mysqli_query($connection, "insert into feed (roll,notes,query) values('$roll','$notes','$que')");

			$row = mysqli_fetch_array($query);	
			
			$error="Your query has been recorded.Thank you!";
	}
		mysqli_close($connection);
	
} 
?>

<! DOCTYPE html>
<html>

<head>


<style>
#div
{
	color:black;
	border:2px solid black;
	margin-top:5%;
	height:70%;
width:70%;
border-radius:25px;
}
textarea
{
	width:500px;
	height:150px;
	font-size:20px;
	outline:none;
	border:2px solid black;
	border-radius:10px;
	padding-left:5px;
	
}
#que
{
	width:500px;
	height:35px;
	font-size:20px;
	border:2px solid black;
	border-radius:10px;
	padding-left:5px;
	outline:none;
	
}


.btn
{
	width:500px;
	background:green;
	color:white;
	height:35px;
	border:2px solid black;
	box-shadow:2px 2px 2px black;
	border-radius:10px;
}
.te
{
	width:500px;
	height:35px;
	border:2px solid black;
	border-radius:10px;
	padding-left:5px;
	outline:none;
	font-size:20px;
}
</style>

<title>
Contact
</title>
</head>

<body>
<center>
<div id="div">

<h2>Drop your queries here.We are pleased to help you.</h2><br><br><br>
<form method="post" action="">

<input type="text" name="roll" class="te" placeholder="Roll Number" required><br><br>	

<select name="que" id="que">
<option value="forgot" selected>Forgot password</option>
<option value="already">Roll number already registered</option>
<option value="other">Other</option>
</select>
<br>
<br>

<textarea name="notes" placeholder="notes(optional)" value=""></textarea><br><br>

<input type="submit" name="quer" class="btn" value="submit" >

</form>

</div>
<h4><?php echo $error;?></h4>
</center>

</body>


</html>