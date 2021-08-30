<?php

$connection = mysqli_connect("localhost", "root", "","student");

session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($connection,"select first_name from details where roll_no='$user_check'");
$rows = mysqli_num_rows($ses_sql);

if($rows==0)
{
$ses_sql=mysqli_query($connection,"select first_name from faculty where roll_no='$user_check'");	
}

$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['first_name'];

if(!isset($login_session))
{
mysqli_close($connection); 
header('Location: index.php');
}
?>