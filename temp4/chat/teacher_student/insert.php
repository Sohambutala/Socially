<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/temp/session.php');

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];
$db = mysqli_connect('localhost', 'root', '', 'student');

$query1 ="INSERT INTO teacher_student_chat (username, msg) VALUES ('$uname', '$msg')";

mysqli_query($db, $query1);
$query2 ="SELECT * FROM teacher_student_chat ORDER BY id DESC";

$result1 =mysqli_query($db, $query2);

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}


/*
$db = mysqli_connect('localhost', 'root', '', 'registration');
	$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);
*/

?>