<?php
	require_once('connection.php');

	if(isset($_POST['submit'])){
		$password = isset($_POST['password'])?trim($_POST['password']): '';
		$conpassword = isset($_POST['conpassword'])?trim($_POST['conpassword']): '';
		$email = $_POST['email'];

		if($password == "" || $conpassword == ""){
			$error = urldecode('all fields are required');
			header('location: ../public/passwordreset.php?email='.$email."&error=".$error);
			return false;
		}
		if($conpassword != $password){
			$error = urldecode('password mixmatch');
			header('location: ../public/passwordreset.php?email='.$email."&error=".$error);
			return false;
		}else{
			$new_pass = md5($password);
			$sql = "UPDATE users SET `password` = '$new_pass' WHERE `email` = '$email'";
			$result = mysqli_query($connect, $sql);
			if($result){
				$success = urldecode('password changed, now login with new password');
				header('location: ../public/index.php?success='.$success);
				return false;
			}else{
				$error = urldecode('error resetting password');
				header('location: ../public/passwordreset.php?email='.$email."&error=".$error);
				return false;
			}
		}
	}else{
		$error = urldecode('please login first');
		header('location: ../public/index.php?error='.$error);
		return false;
	}


	function trimData($data){
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripcslashes($data);

		return $data;
	}
?>