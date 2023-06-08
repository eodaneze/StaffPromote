<?php
	require_once('connection.php');

	$fullname = trimData($_POST['fullname']);
	$email = trimData($_POST['email']);
	$username = trimData($_POST['username']);
	$password = trimData($_POST['password']);

	$new_pass = md5($password);

	$check = "SELECT * FROM users WHERE email = '$email'";
	$check_result = mysqli_query($connect, $check);
	if(mysqli_num_rows($check_result) == 1){
		$error = "email address already taken";
		echo $error;
		return false;
	}else{
		$sql = "INSERT INTO users(fullname, email, username, password)VALUES('$fullname', '$email', '$username', '$new_pass')";
		$result = mysqli_query($connect, $sql);
		if($result){
			$success = "registration successful";
			echo $success;
			return false;
		}else{
			$error = "error creating user";
			echo $error;
			return false;
		}
	}






	function trimData($data){
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripcslashes($data);

		return $data;
	}
?>