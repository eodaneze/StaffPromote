<?php
	require_once('connection.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		// deleting completely from a table
		// $sql = "DELETE FROM staffs WHERE id = '$id'";

		$sql2 = "UPDATE `faculty` SET `deleted` = 0 WHERE `id` = '$id'";
		$result = mysqli_query($connect, $sql2);
		if($result){
			header('location: ../viewFaculty.php');
		}else{
			header('location: ../viewFaculty.php');
		}
	}else{
		header('location: ../index.php');
	}
?>