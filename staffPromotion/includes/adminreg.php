<?php
	require_once('connection.php');
	
	if(isset($_POST['submit'])){
		$name = isset($_POST['name']) ? trim($_POST['name']) : "";
		$email = isset($_POST['email']) ? trim($_POST['email']) : "";
		$password = isset($_POST['password']) ? trim($_POST['password']) : "";

		if($name == "" || $email == "" || $password == ""){
			$error = urlencode("all fields are required");
			header("location: ../Adminregister.php?error=".$error);
			return false;
		}else{
			$name = trimData($name);
			$email = trimData($email);
			$password = trimData($password);
		}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = urlencode("please enter a proper email");
			header("location: ../Adminregister.php?error=".$error);
			return false;
		}else{
			$new_pass = md5($password);
			$md = date('Y-m-d');
			$check = "SELECT * FROM admin WHERE email = '$email'";
			$check_result = mysqli_query($connect, $check);
			if(mysqli_num_rows($check_result) == 1){
				$error = urlencode("email address already taken");
				header("location: ../Adminregister.php?error=".$error);
				return false;
			}else{
				$sql = "INSERT INTO admin(name, email, password, createddate)VALUES('$name', '$email', '$new_pass', '$md')";
				$result = mysqli_query($connect, $sql);
				if($result){
					$success = urlencode("registration successful");
					header("location: ../Admin-login.php?success=".$success);
					return false;
				}else{
					$error = urlencode("error creating admin");
					header("location: ../Adminregister.php?error=".$error);
					return false;
				}
			}
		}
	}else{
		$error = urlencode("please login first");
		header("location: ../index.php?error=".$error);
		return false;
	}	







	function trimData($data){
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripcslashes($data);

		return $data;
	}
?>