<?php
include('login.php'); 

if(isset($_SESSION['login_user']))
{
header("location: profile.php");
}
?>

<html>
<head>

<link rel="stylesheet" href="fstyle.css">

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


<title>
Socially
</title>



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

</head>

<body>

<div id="div">
<center>


<h6 class="head" id="socially" > &#9732; Socially<sup>Faculty</sup>
<p id="info">Socially is a College Management Project</p></h6>

<div id="logi">

<input type="button" class="fac" id="log" value="LOGIN">

<form id="form" method="post" action="">

<input type="text" class="field" id="name" name="username" placeholder="username" onfocus="text_focus(this)" onblur="text_blur(this)" required ></input><br><br>

<input type="password" class="field" id="password" name="password" placeholder="password" onfocus="text_focus(this)" onblur="text_blur(this)" required></input><br><br>

<input type="submit" class="fac" name="fsubmit" id="log2" value="LOGIN &#9755;" style="visibility:hidden;"></a><br>



</form>

<input type="button" onclick="location.href='facultyreg.php'" class="fac" id="reg" value="REGISTER">
<br>
<br>
<br>
<b><a href="contact.php" > Need help? </a></b>

</div>
<br>
<br>
<span><?php echo $error; ?></span>
</center>
</div>
<center>
<footer>
&#9400; Socially,2017.All rights reserved. Email us at socially@gmail.com
</footer>
</center>






</body>

</html>