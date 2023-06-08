<?php
	require_once('connection.php');
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$doc = $_GET['doc'];

		// deleting completely from a table
		// $sql = "DELETE FROM staffs WHERE id = '$id'";

		$sql2 = "DELETE FROM staffdoc WHERE id = '$id'";
		$result = mysqli_query($connect, $sql2);
		if($result){
            unlink('staffdoc/'.$doc);
			header('location: ../staff/uploadDoc.php');
		}else{
			header('location: ../staff/uploadDoc.php');
		}
	}else{
		header('location: ../index.php');
	}
?>