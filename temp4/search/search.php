<?php 

session_start();
$search2=$_POST['search1'];	
$connection = mysqli_connect("localhost", "root", "", "student");

$result = mysqli_query($connection,"select * from details where roll_no='$search2' OR first_name='$search2' OR last_name='$search2'");
$rows = mysqli_num_rows($result);

echo "Student profile Result<br><br>";
echo '<form method="post">';
while($row=mysqli_fetch_assoc($result))
{
	/*$roll_no=$row['roll_no'];
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	*/
	
    //$number[$i] = $row['roll_no'];
	echo 'Name : '.$row['first_name'].'<br>';
	echo 'Surname : '.$row['last_name'].'<br>';
    echo '<input type="submit" name="search_" value="'.$row['roll_no'].'"/><br><br>';
    
}
if (isset($_POST['search_'])) 
{
	
	$purchase = $_POST['search_'];
	echo $purchase;
	$_SESSION['r']=$purchase;
	header("location: search_complete.php");
    
}
echo '</form>';



$result = mysqli_query($connection,"select * from faculty where roll_no='$search2' OR first_name='$search2' OR last_name='$search2'");
$rows = mysqli_num_rows($result);

echo "faculty profile Result<br><br>";

echo '<form method="post">';
while($row=mysqli_fetch_assoc($result))
{
	/*$roll_no=$row['roll_no'];
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	*/
	
    //$number[$i] = $row['roll_no'];
	
	
	
	echo 'Name : '.$row['first_name'].'<br>';
	echo 'Surname : '.$row['last_name'].'<br>';
	echo '<input type="submit" name="search_" value="'.$row['roll_no'].'"/><br><br>';
    
}
if (isset($_POST['search_'])) 
{
	
	$purchase = $_POST['search_'];
	echo $purchase;
	$_SESSION['r']=$purchase;
	header("location: search_complete.php");
    
}
echo '</form>';










?>