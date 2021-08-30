<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/temp/session.php');
$uname=$_SESSION['first'];
 ?>


<html>
<head>
<title>Chat Box</title>

<style>

body
{
	background:none;
}

#chatlogs
{
    background-color:White;
    width: 500px;
    height: 500px;
    overflow: scroll;
	border:4px solid #500000;
	padding:5px;
	margin-top:100px;
	border-radius:5px;
	box-shadow:3px 3px 30px black;
	width:60%;
	font-size:18px;
	background:transparent;
	text-align:left;
	
		
}
#di
{
	border:2px solid #500000;
	width:61%;
	border-radius:10px;
	height:50px;
	box-shadow:3px 3px 30px black;
	background:transparent;
	
}
body
{
	background-image:url("chat.jpg");
}

#t
{
	float:left;
	height:50px;
	outline:none;
	decoration:none;
	width:80%;
	border-radius:5px;
	border:2px solid #500000;
	padding-left:5px;
	border-right:4px solid #500000;
}
a
{
	float:right;
	width:19%;
	background:#159900;
	color:white;
	text-decoration:none;
	font-size:22px;
	height:36px;
	padding-top:10px;
	border-radius:5px;
	border:2px solid #500000;
	border-left:4px solid #500000;
	
}

a:hover
{
	background:#1DD400;
	color:black;
		height:34px;
		box-shadow:3px 3px 30px black;
		border:3px solid black;
}



</style>

<script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>

function submitChat() {
	var uname = "<?php echo $uname;?>"
	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
	xmlhttp.send();
form1.msg.value="";

}

$(document).ready(function(e){
	$.ajaxSetup({
		cache: false
	});
	setInterval( function(){ $('#chatlogs').load('logs.php'); }, 2000 );
});

</script>


</head>
<body>
<center>
<div id="chatlogs">
LOADING CHATLOG...
</div>
<br>
<div id="di">

<form method="post" name="form1">
<input type="text" name="msg" id="t" placeholder="Type a message..">
<a href="#" onclick="submitChat()">Send</a><br><br>
</form>

</div>

</center>

</body>
