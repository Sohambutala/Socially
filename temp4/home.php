
<?php
include('login.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link href="prof.css" rel="stylesheet" type="text/css">

<style>

body
{
	background:none;
}

#pic 
{
	float:left;
	border:2px solid white;
	width:48%;
	margin-left:5px;
	margin-top:5px;
	margin-bottom:5px;
	border-radius:20px;
	height:500px;
}
#nav
{
	width:20%;
	float: left;
	margin-left:20px;
	border:2px solid black;
	border-radius:25px;
	color:black;
}

#nav_b
{
	margin-top:5px;
	width:90%;
	border:4px solid black;
	background:transparent;
	color:black;
	outline:none;
	border-radius:25px;
	font-size:20px;
	margin-bottom:5px;
	padding-top:5px;
	padding-bottom:5px;
}

#div
{
	height:95%;
	width:75%;
	margin:0 auto;
	border:4px solid black;
	border-radius:20px;
	float:left;
	margin-left:5px;
	background-image:url('download1.jpg');
	color:white;
}
table
{
	
	border-radius:20px;
	width:50%;
	float:right;
	color:white;
	margin-left:5px;
	
}
th,tr
{
	
	color:white;
	font-size:20px;
	padding-bottom:10px;
	padding-top:10px;
	border:1px solid white;
	border-radius:10px;
	border-bottom:3px solid white;
	border-right:3px solid white;
}

#edit
{
	 box-shadow: 5px 5px 3px black;

	background:white;
	color:black;
	border:1px solid black;
	border-radius:10px;
}
#change
{
	background:transparent;
	border:none;
	outline:none;
	color:white;
	width:90%;
	text-align:center;
	
	font-size:20px;
}
#se
{
	margin-top:-38px;
	padding-bottom:28px;
}
.up
{
	float:right;
	margin-right:25px;	
	width:25%;
	height:40px;
	background:transparent;
	color:white;
	font-size:20px;
	border:1px solid white;
	border-radius:10px;
	border-bottom:3px solid white;
	border-right:3px solid white;
}

#chan
{
	background:transparent;
	border:1px solid white;
	opacity:0.9;
	width:48%;
	color:white;
	font-size:16px;
	border-bottom:3px solid white;
	border-right:3px solid white;
	border-radius:10px;
	
	outline:none;
	
	
}

img
{
	border-radius:100%;
	margin-left:20px;
	margin-top:10px;
}

</style>

<script>
function tfocus(e)
{
	e.style.width="40%";
	
	e.style.animationName="focus"; 
e.style.animationDuration="1s";
}
function tblur(e)
{
	e.style.width="20%";
	e.style.animationName="defocus"; 
	e.style.animationDuration="1s";
}

function logout()
{
	window.location="logout.php";
}

</script>

</head>
<body>
<div id="profile">

<div id="top" >

<h6 class="head">&#9732; Socially&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</h6>
<b id="welcome"><u>Welcome : <i><?php echo $_SESSION['first']; ?></i></u></b><br>

<button id="logout" onclick="location.href='change.php';">Update Password</button>

<input type="submit" method="post" id="logout" name="aa" value ="Chat Room" onclick="document.location.href='chat/chat_decision.php'";>

<input type="submit" value="Message" onclick="location.href='search/mess.php';" id="logout" name="message1">

<button onclick="logout()" id="logout" value="Log Out">Log Out</button>


<form id="se" method="post" action="search/search.php">
<input class="searchb" type="submit" name="search" value="&#x1f50d; Search" id="search">
<input class="searchbar" type="text" onfocus="tfocus(this)" onblur="tblur(this)" name="search1" placeholder="search.." >
</form>


<br>

</div>


<div id="nav" class="main">
<left>&#8226;</left>
<right>&#8226;</right>
<center>

<button id="nav_b" onclick="location.href='profile.php';">Home</button><br>
<button id="nav_b" onclick="location.href='notice/check.php';">Notice</button><br>
<button id="nav_b" onclick="location.href='home.php';" >Profile</button><br>
<button id="nav_b" onclick="location.href='file/check.php';">Assignment</button><br>
</center>

<left>&#8226;</left>
<right>&#8226;</right>

</div>

<div id="div" class="main">


<div id="pic">
<?php
$user=$_SESSION['login_user']; //you can fetch username here
$db=new mysqli('localhost','root','','student');
if($db->connect_errno){
echo $db->connect_error;
}
$pull="select * from userimage  where user='$user'";

$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
$extension = @end(explode(".", $_FILES["file"]["name"]));
if(isset($_POST['pupload']))
{
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/JPG")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 204800000)
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
	echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo '<div class="pic">';
		

		if (file_exists("upload/" . $_FILES["file"]["name"]))
		{
		unlink("upload/" . $_FILES["file"]["name"]);
		}
		else{
			$pic=$_FILES["file"]["name"];
			$conv=explode(".",$pic);
			$ext=$conv['1'];
			move_uploaded_file($_FILES["file"]["tmp_name"],"upload/". $user.".".$ext);
			
			$url=$user.".".$ext;

			
			$quer = mysqli_query($connection,"select * from userimage where user='$user'");

			$rows = mysqli_num_rows($quer);
			if ($rows == 1)
			{
			$query="update userimage set url='$url', lastUpload=now() where user='$user'";
			if($upl=$db->query($query))
			{
			echo "<br/>Saved to Database successfully";
			}
			}
			else
			{
						$que = "INSERT INTO userimage (url,lastUpload,user) 
					  VALUES('$url',now(),'$user')";
			mysqli_query($connection, $que);
				echo "done";
				
				
				
			}
			
			
			
		 }
	}
}else{
 echo "File Size Limit Crossed 200 KB Use Picture Size less than 200 KB";
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
<?php
$res=$db->query($pull);
$pics=$res->fetch_assoc();
echo '<div class="imgLow">';
echo "<img src='upload/$pics[url]' alt='profile picture' width='500 height='200'   class='doubleborder'/></div>";
?>
<input type="file" id="chan" name="file" />
<input type="submit" id="chan" name="pupload" class="button" value="Upload"/>
</form>


</div>






<form method="post" action="" onsubmit="return check()">
<table cellspacing="20">

<tr>
<th>ROLL NUMBER</th>
<th><?php echo $_SESSION['login_user'];?></th>
</tr>

<tr>
<th>FIRST NAME</th>
<th><input id="change" type="text" name="fname"value="<?php echo $_SESSION['first'];?>" name="lname" required></th>

</tr>

<tr>
<th>LAST NAME</th>
<th><input id="change" type="text" name="lname" value="<?php echo $_SESSION['last'];?>" required></th>

</tr>



<tr>
<th>EMAIL ID</th>
<th><input id="change" type="text" name="emailid" value="<?php echo $_SESSION['emailid'];?>" required></th>

</tr>

<tr>
<th>MOBILE NUMBER</th>
<th><input id="change" type="text" name="mobno" value="<?php echo $_SESSION['mob'];?>" required></th>

</tr>
</table>
<input type="hidden" name="rollno" value="<?php echo $_SESSION['login_user'];?>">
<br>
<input type="submit" name="none" value="EDIT" class="up">



</form>
</div>







</div>
</body>
</html>