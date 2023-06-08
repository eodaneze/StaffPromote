<?php
	require_once('connection.php');
	
	if(isset($_POST['submit'])){
		$email = isset($_POST['email']) ? trim($_POST['email']) : "";
		$password = isset($_POST['password']) ? trim($_POST['password']) : "";

		if($email == "" || $password == ""){
			$error = urlencode("all fields are required");
			header("location: ../faculty/login.php?error=".$error);
			return false;
		}else{
			$email = trimData($email);
			$password = trimData($password);
		}
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = urlencode("please enter a proper email");
			header("location: ../faculty/login.php?error=".$error);
			return false;
		}else{

			$sql = "SELECT * FROM faculty WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($connect, $sql);
			if(mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_assoc($result);
				session_start();
				$_SESSION['facid'] = $row['id'];
				if(isset($_SESSION['facid'])){
					header('location: ../faculty/facultyDashboard.php');
					return false;
				}else{
					$failed = urlencode("email or password is incorrect");
					header('location: ../faculty/login.php?error='.$failed);
					return false;
				}
					
				
			}else{
				$notfound = urlencode('user not found');
				header('location: ../faculty/login.php?error='.$notfound);
				return false;
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