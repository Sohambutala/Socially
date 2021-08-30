<?php
include($_SERVER['DOCUMENT_ROOT'] . '/temp4/login.php');

 ?>
<html>
<head>
<title>Notice</title>

<style>
#div
{
height:95%;
width:48%;
border:2px solid black;
margin:0;
float:right;
border-radius:25px;
padding-left:10px;
padding-top:10px;
}

#ldiv
{
	height:95%;
width:48%;
border:2px solid black;
margin:0;
float:left;
border-radius:25px;
padding-left:10px;
padding-top:10px;
	
}
</style>

</head>
<body>

<div id="ldiv">





</div>


<div id="div">

<form method="post" action="">

<select name="dept">

<option name="coms">Computer</option>
<option name="elec">Electrical</option>
<option name="ex">Electronics</option>

</select>
<br>

<select name="year">

<option name="1">FE</option>
<option name="2">SE</option>
<option name="3">TE</option>
<option name="4">BE</option>

</select>
<br>


<textarea name="cont" placeholder="enter notice" ></textarea>
<br>

<input type="text" style="visibility:hidden;" value="<?php echo $_SESSION['login_user'] ?>">
<input type="submit" name="notice" value="Display" class="nob">
</form>

<button onclick="location.href='log.php';" name="display" value="Display" >Display</button>

<span> <?php echo $error; ?><span>

</div>


</body>
</html>