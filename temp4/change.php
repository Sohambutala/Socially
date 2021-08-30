<?php
include('login.php'); 
?>

<!DOCTYPE html>
<html>
<head>
<title>
Socially
</title>

<style>
#up
{
	height:95%;
width:50%;
border:2px solid black;
margin:0 auto;
border-radius:25px;
padding-top:5%;
padding-bottom:5%;
margin-top:10%;

}
.upd
{
	background:transparent;
	outline:none;
	font-size:20px;
	padding-left:10px;
	height:30px;
	width:70%;
	border:2px solid black;
		border-bottom:3px solid black;
	border-right:3px solid black;
	box-shadow:2px 2px 2px grey;
	border-radius:20px;
	
}


.upd1
{
	background:transparent;
	outline:none;
	font-size:20px;
	padding:10px;
	height:45px;
	width:40%;
	border:1.5px solid black;
	border-bottom:3px solid black;
	border-right:3px solid black;
	box-shadow:2px 2px 2px grey;
	border-radius:20px;
	
}


span
{
	color:red;
	background:black;
	
}
</style>

<script>
function check()
{
var pass1=document.getElementById('npass');
var pass2=document.getElementById('npass2');

if(pass1.value!=pass2.value)
	{
	alert('Passwords don\'t match');
	return false;
	}

}
</script>

</head>

<body>
<center>
<div id="up">


<form method="post" action="" onsubmit="return check()">

<input type="password" class="upd" placeholder="Current password" name="pass" class="te"><br><br>
<input type="password" class="upd" placeholder="New password" name="npass" id="npass"class="te"><br><br>
<input type="password" class="upd" placeholder="Confirm password" name="npass2" id="npass2" class="te"><br><br>
<br>
<input type="submit" class="upd1" name="change" value="Update">

</form>

<span><?php echo $error; ?></span>
</div>
</center>


</body>

</html>