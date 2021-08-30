
<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<link rel="stylesheet" href="prof.css">

<style>
#se
{
	margin-top:-38px;
	padding-bottom:28px;
}
</style>

<script>
function logout()
{
	window.location="logout.php";
}

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

</script>

<script>


function openNews(evt, dname)
{
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(dname).style.display = "block";
    evt.currentTarget.className += " active";
}

</script>

</head>
<body onload="document.getElementById('default').click();">
<div id="profile">

<div id="top">

<h6 class="head">&#9732; Socially&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</h6>
<b id="welcome"><u>Welcome : <i><?php echo $login_session; ?></i></u></b><br>

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
<br>



<div id="nav">
<left>&#8226;</left>
<right>&#8226;</right>
<center>

<button id="nav_b" onclick="location.href='profile.php';">Home</button><br>
<button id="nav_b" onclick="location.href='notice/check.php'">Notice</button><br>
<button id="nav_b" onclick="location.href='home.php';" >Profile</button><br>
<button id="nav_b" onclick="location.href='file/check.php';">Assignment</button><br>
</center>

<left>&#8226;</left>
<right>&#8226;</right>

</div>

<div id="news">
<h6 id="new">
NEWS

</h6>

<br><br>


<div id="tab">
<button id="default" onclick="openNews(event,'general')" class="tablinks" ><b>General</b></button>
<button class="tablinks" onclick="openNews(event,'computer')"><b>Computer</b></button>
<button class="tablinks" onclick="openNews(event,'electronics')"><b>Electronics</b></button>
<button class="tablinks" onclick="openNews(event,'instrumental')"><b>Instrumental</b></button>
<button class="tablinks" onclick="openNews(event,'it')"><b>Information technology</b></button>
<button class="tablinks" onclick="openNews(event,'electrical')"><b>Electrical</b></button>
</div>



<br>
<div id="general" class="tabcontent">

<ul>
<li>aaj isne isko maara.</li>
<li>principal jabardasti leke gaya bacho ko stadium.</li>
<li>sab bacho ko glass door ke yaha rukna pada ghanto ki line me.</li>
<li>exam form bharte bharte nikal gaye bacho ke pasine.</li>
<li>general.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
</ul>

</div>

<div id="computer" class="tabcontent">

<ul>
<li>aaj isne isko maara.</li>
<li>principal jabardasti leke gaya bacho ko stadium.</li>
<li>sab bacho ko glass door ke yaha rukna pada ghanto ki line me.</li>
<li>exam form bharte bharte nikal gaye bacho ke pasine.</li>
<li>computer.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
</ul>

</div>

<div id="electronics" class="tabcontent">

<ul>
<li>aaj isne isko maara.</li>
<li>principal jabardasti leke gaya bacho ko stadium.</li>
<li>sab bacho ko glass door ke yaha rukna pada ghanto ki line me.</li>
<li>exam form bharte bharte nikal gaye bacho ke pasine.</li>
<li>electronics.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
</ul>

</div>

<div id="instrumental" class="tabcontent">

<ul>
<li>aaj isne isko maara.</li>
<li>principal jabardasti leke gaya bacho ko stadium.</li>
<li>sab bacho ko glass door ke yaha rukna pada ghanto ki line me.</li>
<li>exam form bharte bharte nikal gaye bacho ke pasine.</li>
<li>instrumental.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
</ul>

</div>

<div id="it" class="tabcontent">

<ul>
<li>aaj isne isko maara.</li>
<li>principal jabardasti leke gaya bacho ko stadium.</li>
<li>sab bacho ko glass door ke yaha rukna pada ghanto ki line me.</li>
<li>exam form bharte bharte nikal gaye bacho ke pasine.</li>
<li>information technology.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
</ul>

</div>

<div id="electrical" class="tabcontent">

<ul>
<li>aaj isne isko maara.</li>
<li>principal jabardasti leke gaya bacho ko stadium.</li>
<li>sab bacho ko glass door ke yaha rukna pada ghanto ki line me.</li>
<li>exam form bharte bharte nikal gaye bacho ke pasine.</li>
<li>electrical.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
<li>.</li><br><br>
</ul>

</div>

</body>
</html>