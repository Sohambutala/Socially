<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/temp4/login.php');

 ?>
<html>
<head>
<title>Choose</title>
</head>
<body>

<?php

$db = mysqli_connect('localhost', 'root', '', 'student');

$query2 ="SELECT * FROM notice ORDER BY id DESC";

        $result2 =mysqli_query($db, $query2);

        while($extract = mysqli_fetch_array($result2))
			{
	    echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />".$extract['year']."</span><br />".$extract['dept']."</span><br />";
        }


?>



</body>
</html>