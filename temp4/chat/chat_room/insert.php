<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/temp/session.php');

$first= $_SESSION['first'];
$email= $_SESSION['emailid'];

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];
$db = mysqli_connect('localhost', 'root', '', 'student');

$query = mysqli_query($db,"select * from details where first_name='$first' AND email_id='$email'");
		$rows = mysqli_num_rows($query);
		
		if ($rows == 1) 
		{
		$query1 ="INSERT INTO student_chat (username, msg) VALUES ('$uname', '$msg')";
		
		mysqli_query($db, $query1);
         $query1 ="SELECT * FROM student_chat ORDER BY id DESC";

         $result1 =mysqli_query($db, $query1);

         while($extract = mysqli_fetch_array($result1)) {
	     echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
        }
		}
		else
		{
		
		$query2 ="INSERT INTO teacher_chat (username, msg) VALUES ('$uname', '$msg')";	
		mysqli_query($db, $query2);
        $query2 ="SELECT * FROM teacher_chat ORDER BY id DESC";

        $result2 =mysqli_query($db, $query2);

        while($extract = mysqli_fetch_array($result2)) {
	    echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
        }
		}
			
		























//$query1 ="INSERT INTO student_chat (username, msg) VALUES ('$uname', '$msg')";

/*mysqli_query($db, $query1);
$query1 ="SELECT * FROM student_chat ORDER BY id DESC";

$result1 =mysqli_query($db, $query1);

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}




$db = mysqli_connect('localhost', 'root', '', 'registration');
	$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);
*/