<?php
include('login.php'); 

if(isset($_SESSION['login_user']))
{
header("location: profile.php");
}

?>


<html>
<head>

<title>Register
</title>

<link rel="stylesheet" href="fstyle.css">

<style>
@keyframes focus
{
from
{
border-bottom:2px solid black;
}
to
{
border-bottom:3px solid red;
}
}


@keyframes defocus
{
from
{
border-bottom:3px solid red;
}
to
{
border-bottom:2px solid black;
}
}


</style>

<script type="text/javascript">

function text_blur(e)
{

e.style.borderBottom="2px solid black";
e.style.fontSize="20px";
e.style.animationName="defocus";
 e.style.animationDuration="0.2s";
}


function text_focus(e)
{
e.style.animationName="focus"; 
e.style.animationDuration="0.2s";
e.style.borderBottom="3px solid red";
e.style.fontSize="24px";
}
</script>

<script>
function check()
{
var pass1=document.getElementById('pass1');
var pass2=document.getElementById('pass2');
var email=document.getElementById('email');
var number=/[0-9]/;
var fname=document.getElementById('fname');
var lname=document.getElementById('lname');
var num=document.getElementById('ph');
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if(number.test(fname.value) || number.test(lname.value))
	{
	alert('number not allowed');
	return false;
	}
    if (!filter.test(email.value)) 
	{
    alert('Please provide a valid email address');
    return false;
	}
	if(num.value>9999999999 || num.value<7000000000)
	{
	alert('enter correct number');
	return false;
	}
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
<div id="div">

<h6 class="headr" id="reg">Registration Form<sup>faculty</sup><h6>

<form method="post" action="" onsubmit="return check()">



<input type="text" class="fieldr" id="fname" name="fname" placeholder="First name.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br><br>

<input type="text" class="fieldr" id="lname" name="lname" placeholder="Last name.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br><br>

<input type="text" class="fieldr" id="roll" name="roll" placeholder="Roll Number.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br><br>

<input type="text" class="fieldr" id="email" name="email" placeholder="email-id.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br><br>

<input type="number" class="fieldr" id="ph" name="ph" placeholder="Phone number.." onfocus="text_focus(this)" onblur="text_blur(this)" required ><br><br><br>

<input type="password" class="fieldr" id="pass1" name="pass1" placeholder="password.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br><br>

<input type="password" class="fieldr" id="pass2" name="pass2" placeholder="confirm password.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br><br>

<select name="gender" class="fieldr" id="gender" required onfocus="text_focus(this)" onblur="text_blur(this)"><br><br><br>
<option disabled selected value>Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
</select>

<br>
<br><br>


<input type="submit" class="fac" name="regf" value="REGISTER">
</form>
<br>
<br>

<span><?php echo $error; ?></span>

</center>

</div>


</body>
</html>