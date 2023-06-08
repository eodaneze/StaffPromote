<?php
	require_once('connection.php');
	if(isset($_GET['staffid'])){
		$staffid = $_GET['staffid'];

		$sql2 = "UPDATE `staffdoc` SET `facseen` = 0  WHERE `staffid` = '$staffid'";
		$result = mysqli_query($connect, $sql2);
		if($result){
			header('location: ../faculty/viewDocument.php');
		}else{
			header('location: ../faculty/viewDocument.php');
		}
	}else{
		header('location: ../index.php');
	}
?>