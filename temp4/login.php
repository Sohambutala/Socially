
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message


$connection = mysqli_connect("localhost", "root", "","student");

if (isset($_POST['submit'])) 
{
if (empty($_POST['username']) || empty($_POST['password'])) 
{
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);

$hash=md5($password);

$db = mysqli_select_db($connection,"student");

$query = mysqli_query($connection,"select * from details where password='$hash' AND roll_no='$username'");

$rows = mysqli_num_rows($query);
if ($rows == 1) 
{
$row = mysqli_fetch_array($query);	
$_SESSION['first'] =$row[1];
$_SESSION['last'] =$row[2];
$_SESSION['emailid']=$row[5];
$_SESSION['mob'] =$row[4]; 
$_SESSION['login_user']=$username;
header("location: profile.php"); 
} 
else 
{
$error = "Username or Password is invalid";
}
mysqli_close($connection); 
}
}



if (isset($_POST['reg_user'])) 
	{
		// receive all input values from the form
		$fname = mysqli_real_escape_string($connection,$_POST['fname']);
		$lname = mysqli_real_escape_string($connection, $_POST['lname']);
		$roll = mysqli_real_escape_string($connection, $_POST['roll']);
		$ph = mysqli_real_escape_string($connection, $_POST['ph']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password_1 = mysqli_real_escape_string($connection, $_POST['pass1']);
		$gender = mysqli_real_escape_string($connection, $_POST['gender']);
		

		// register user if there are no errors in the form
		
		
			$password = md5($password_1);//encrypt the password before saving in the database
		
		$query = mysqli_query($connection,"select * from details where roll_no='$roll'");

		$rows = mysqli_num_rows($query);
		if ($rows == 0) 
		{
		
		
		$query = "INSERT INTO details (first_name,last_name,roll_no,phone_no, email_id, password,gender) 
					  VALUES('$fname','$lname','$roll','$ph','$email','$password','$gender')";
					  
			mysqli_query($connection, $query);

			$row = mysqli_fetch_array($query);	
$_SESSION['first'] =$fname;
$_SESSION['last'] =$lname;
$_SESSION['emailid']=$email;
$_SESSION['mob'] =$ph; 
		$_SESSION['login_user']=$roll;
header("location: profile.php");
		}
		else
		{
			$error="Roll number already registered.";
		}
mysqli_close($connection);
	}

	

//facultycode

if (isset($_POST['fsubmit'])) 
{
if (empty($_POST['username']) || empty($_POST['password'])) 
{
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);

$hash=md5($password);

$db = mysqli_select_db($connection,"student");

$query = mysqli_query($connection,"select * from faculty where password='$hash' AND roll_no='$username'");

$rows = mysqli_num_rows($query);
if ($rows == 1) 
{
$row = mysqli_fetch_array($query);	
$_SESSION['first'] =$row[1];
$_SESSION['last'] =$row[2];
$_SESSION['emailid']=$row[5];
$_SESSION['mob'] =$row[4]; 
$_SESSION['login_user']=$username;
header("location: profile.php"); 
} 
else 
{
$error = "Username or Password is invalid";
}
mysqli_close($connection); 
}
}	
	
	
	
if (isset($_POST['regf'])) 
	{
		// receive all input values from the form
		$fname = mysqli_real_escape_string($connection,$_POST['fname']);
		$lname = mysqli_real_escape_string($connection, $_POST['lname']);
		$roll = mysqli_real_escape_string($connection, $_POST['roll']);
		$ph = mysqli_real_escape_string($connection, $_POST['ph']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password_1 = mysqli_real_escape_string($connection, $_POST['pass1']);
		$gender = mysqli_real_escape_string($connection, $_POST['gender']);
		

		// register user if there are no errors in the form
		
		
			$password = md5($password_1);//encrypt the password before saving in the database
		
		$query = mysqli_query($connection,"select * from faculty where roll_no='$roll'");

		$rows = mysqli_num_rows($query);
		if ($rows == 0) 
		{
		
		
		$query = "INSERT INTO faculty (first_name,last_name,roll_no,phone_no, email_id, password,gender) 
					  VALUES('$fname','$lname','$roll','$ph','$email','$password','$gender')";
					  
			mysqli_query($connection, $query);

			$row = mysqli_fetch_array($query);	
$_SESSION['first'] =$fname;
$_SESSION['last'] =$lname;
$_SESSION['emailid']=$email;
$_SESSION['mob'] =$ph; 
		$_SESSION['login_user']=$roll;
header("location: profile.php");
		}
		else
		{
			$error="Roll number already registered.";
		}
mysqli_close($connection);
	}


if (isset($_POST['change'])) 
	{
		$pass=mysqli_real_escape_string($connection,$_POST['pass']);
		$npass=mysqli_real_escape_string($connection,$_POST['npass']);
		$roll=$_SESSION['login_user'];
		
		$hash=md5($pass);
		$hash2=md5($npass);
		
		$query = mysqli_query($connection,"select * from details where roll_no='$roll' AND password='$hash'");
		$rows = mysqli_num_rows($query);
		
		if ($rows == 0) 
		{
		$query = mysqli_query($connection,"select * from faculty where roll_no='$roll' AND password='$hash'");
		$rows = mysqli_num_rows($query);
		if ($rows == 0) 
		{
			$error="Please enter the current password";
		}
		else
		{
			mysqli_query($connection,"update faculty set password='$hash2' where roll_no='$roll'");
			$error="password updated successfully";
			
			
		}
			
		}
		else
		{
			mysqli_query($connection,"update details set password='$hash2' where roll_no='$roll'");
			$error="password updated successfully";	
		}
		mysqli_close($connection);
	}	
		//Update Home Page
	
	if (isset($_POST['none']))
	{
		$fname = mysqli_real_escape_string($connection,$_POST['fname']);
		$lname = mysqli_real_escape_string($connection, $_POST['lname']);
		$emailid = mysqli_real_escape_string($connection, $_POST['emailid']);
		$mobno= mysqli_real_escape_string($connection, $_POST['mobno']);
		$roll= mysqli_real_escape_string($connection, $_POST['rollno']);	
		
		
		$query = mysqli_query($connection,"select * from details where roll_no='$roll'");
		$rows = mysqli_num_rows($query);
		
		if ($rows == 0) 
		{
		//$query = mysqli_query($connection,"select * from faculty where roll_no='$roll'");
		//$rows = mysqli_num_rows($query);
		 mysqli_query($connection,"update faculty set first_name='$fname',last_name='$lname',email_id='$emailid',phone_no='$mobno' where roll_no='$roll'");
		$_SESSION['first']=$fname;
		$_SESSION['last']=$lname;
		$_SESSION['emailid']=$emailid;
		$_SESSION['mob']=$mobno;
		}
			
	
		else
		{
			mysqli_query($connection,"update details set first_name='$fname',last_name='$lname',email_id='$emailid',phone_no='$mobno' where roll_no='$roll'");
			//$error="password updated successfully";
				$_SESSION['first']=$fname;
		        $_SESSION['last']=$lname;
		        $_SESSION['emailid']=$emailid;
		        $_SESSION['mob']=$mobno;
		}
		
		mysqli_close($connection);
		header("location: profile.php");
		}
		
	   
	    if (isset($_POST['notice']))
	   {
		   $dept = mysqli_real_escape_string($connection,$_POST['dept']);
		   $year = mysqli_real_escape_string($connection,$_POST['year']);
		   $cont = mysqli_real_escape_string($connection,$_POST['cont']);
		   $user=$_SESSION['login_user'];
		   
		   $query1 ="INSERT INTO notice (username, msg,year,dept) VALUES ('$user','$cont','$year','$dept')";
		   
mysqli_query($connection, $query1);


$error="Notice displayed";


		   
	   }
	  if (isset($_POST['mess']))
	  {
		  $send=$_SESSION['login_user'];
		  $reci=$_SESSION['r'];
		  $message=$_POST['message'];
		  
		  mysqli_query($connection,"INSERT INTO message (sender,reciver,message,date) VALUES ('$send','$reci','$message',now())");
		  
	  }
	   
	   
	   
?>