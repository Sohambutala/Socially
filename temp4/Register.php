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

<link rel="stylesheet" href="style.css">


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
e.style.fontSize="22px";
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
color:white;
}
input:-ms-input-placeholder
{  
color:white;
}

#reg
{
font-family:courier new;
font-size:30px;
color:white;
margin:0;
padding-top:35px;
}

b
{
font-family:cursive;
font-size:20px;
padding-left:25px;
}


select
{
font-size:20px;
font-family:Caflisch Script Pro, cursive;
width:50%;
height:40px;
outline:none;
border:none;
background:transparent;
border-bottom:3px solid white;
color:white;
border-radius:5px;
padding-left:10px;
}

body
{
background-image:url("background.jpg");
background-repeat:no-repeat;
background-position:center;
}

span
{
	color:red;
	font-size:20px;
	background:black;
}

input[type="number"]
{
	background:transparent;
	outline:none;
	decoration:none;
	width:50%;
	font-size:20px;
	font-family:Caflisch Script Pro, cursive;
	border:none;
	color:#F0EBEB;
	border-bottom:3px solid #F0EBEB;
	box-shadow:5px 5px 3px black;
	border-radius:5px;
	padding-left:10px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type='number'] {
    -moz-appearance:textfield;
}

</style>

</head>

<body>
<center>
<div id="div">

<h6 id="reg">Registration Form<h6>

<form method="post" action="" onsubmit="return check()"> 

<br><input type="text"  id="fname" name="fname" placeholder="First name.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br>

<br><input type="text" id="lname" name="lname" placeholder="Last name.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br>

<br><input type="text"  id="roll" name="roll" placeholder="Roll Number.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br>

<br><input type="text"  id="email" name="email" placeholder="email-id.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br>

<br><input type="number"  id="ph" name="ph" placeholder="Phone number.." onfocus="text_focus(this)" onblur="text_blur(this)" required ><br><br>

<br><input type="password"  id="pass1" name="pass1" placeholder="password.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br>

<br><input type="password" id="pass2" name="pass2" placeholder="confirm password.." onfocus="text_focus(this)" onblur="text_blur(this)" required><br><br>

<br><select name="gender" id="gender" required onfocus="text_focus(this)" onblur="text_blur(this)">
<option disabled selected value>Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
</select>
<br><br><br>
<input type="submit" name="reg_user" value="REGISTER &#9755;" >
</form>

<br>
<br>

<span><?php echo $error; ?></span>

</center>

</div>


</body>
</html>