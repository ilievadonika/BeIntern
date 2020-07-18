<?php
session_start();

include_once 'config.php';

	$userid =  $_SESSION['logged_user_id'];
	$sql = "SELECT * FROM users WHERE userId = '$userid'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
if($row['role'] == "1"){
	
	session_destroy();
header("Location: login_student.php");
	
} else if($row['role'] == "2"){
	
	session_destroy();
header("Location: login_employer.php");
	
} else{
session_destroy();
header("Location: login_educator.php");
}

?>
