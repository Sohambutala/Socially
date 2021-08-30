<?php
include('login.php'); 

if(isset($_SESSION['login_user']))
{
header("location: profile.php");
}
?>

<html>
<head>

<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(document).ready(function()
{
	$("#log").click(function()
	{
		$("#name").slideToggle();
		$("#password").slideToggle();
		$("#log").hide();
		$("#log2").css('visibility','visible');
    });
	
	$("#socially").click(function()
	{
		$("#info").slideToggle();
	});
	
	
});
</script>


<script type="text/javascript">

function text_blur(e)
{
e.style.background="transparent";
e.style.color="#F0EBEB";
e.style.borderBottom="3px solid #F0EBEB";
e.style.fontSize="20px";
e.style.animationName=""; 
}


function text_focus(e)
{
e.style.animationName="focus"; 
e.style.animationDuration="1.5s";
e.style.borderBottom="3px solid red";
e.style.background="#F0EBEB";
e.style.color="black";
e.style.fontSize="24px";
}
</script>


<title>
Socially
</title>

<style>


input::-webkit-input-placeholder 
{
color:white;
}
input:-moz-placeholder 
{ 
color:white;  
}
input::-moz-placeholder 
{
color: white;
}
input:-ms-input-placeholder
{  
color: white;
}
.head
{
font-family:courier new;
font-size:60px;
color:#FFF8F8;
margin-top:30px;
}
.head:hover
{
font-family:courier new;
font-size:60px;
color:#4F0909;
}
body
{
background-image:url("background.jpg");
background-repeat:no-repeat;
background-position:center;
}
footer
{
color:#F0EBEB;
}

.field
{
display:none;
}
p
{
display:none; 
color:white; 
font-size:13px;
}
a
{
	padding:2px;
	outline:none;
text-decoration:none;
	background:black;
	color:white;
	border:1px solid white;
	font-size:20px;
	border-radius:5px;
	transition-duration: 0.4s;
-webkit-transition-duration: 0.4s;
}

a:hover
{
background:white;
color:black;
font-size:22px;	
}


span
{
	font-size:20px;
	background:black;
color:red;
}
</style>

<style>
@keyframes focus
{
from
{
background:transparent;
border-bottom:3px solid #F0EBEB;
}
to
{
background:#F0EBEB;
border-bottom:3px solid red;
}
}

</style>

</head>

<body>

<div id="div">
<center>

<h6 class="head" id="socially" > &#9732; Socially
<p id="info">Socially is a College Management Project</p></h6>

<input type="button" id="log" value="LOGIN"><br><br>

<form id="form" method="post" action="">

<input type="text" class="field" id="name" name="username" placeholder="username" onfocus="text_focus(this)" onblur="text_blur(this)" required ></input><br><br>

<input type="password" class="field" id="password" name="password" placeholder="password" onfocus="text_focus(this)" onblur="text_blur(this)" required></input><br><br>

<input type="submit" name="submit" id="log2" value="LOGIN &#9755;" style="visibility:hidden;"><br>

</form>

<input type="button" onclick="location.href='register.php'" id="reg" value="REGISTER">
<br>
<br>
<input type="button" onclick="location.href='faculty.php';" name="faculty" id="fac" value="Faculty? Sign in here &#9755;">
<br>

<br>
<span><?php echo $error; ?></span>

<br>
<b><a href="contact.php" > Need help? </a></b>



</center>
</div>
<center>
<footer>
&#9400; Socially,2017.All rights reserved. Email us at socially@gmail.com
</footer>
</center>






</body>

</html>