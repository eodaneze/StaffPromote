<?php
	require_once('connection.php');
	if(isset($_GET['staffid'])){
		$staffid = $_GET['staffid'];

		$sql2 = "UPDATE `staffdoc` SET `deleted` = 0 WHERE `staffid` = '$staffid'";
		$result = mysqli_query($connect, $sql2);
		if($result){
			header('location: ../promoted.php');
		}else{
			header('location: ../promoted.php');
		}
	}else{
		header('location: ../index.php');
	}
?>