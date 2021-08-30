<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/temp/session.php');

 ?>
<html>

<style>
#logout
{
	margin-top:20px;
	margin-bottom:20px;
	background:transparent;
	border:2px solid black;
	box-shadow:3px 3px 8px black;
	width:40%;
	height:40px;
	font-size:18px;
	border-radius:15px;
	transition-duration: 0.6s;
-webkit-transition-duration: 0.6s;
}
#div
{
	float:center;
	border:2px solid black;
	width:50%;
	margin-top:200px;
	border-radius:25px;
}
#logout:hover
{
	background:black;
	color:white;
	box-shadow:3px 3px 8px white;
}

</style>

<head>
<title>Choose</title>
</head>
<body>
<center>
<div id="div">
<button id="logout" onclick="document.location.href='chat_room/index.php'">Student Chat Room</button><br><br><br>
<button id="logout" onclick="document.location.href='teacher_student/index.php'">Staff-Student Chat Room</button>
</div>
</center>
</body>
</html>