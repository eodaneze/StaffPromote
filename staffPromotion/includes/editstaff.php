<?php
	require_once('connection.php');
	
	if(isset($_POST['edit'])){

		$name = isset($_POST['name']) ? trim($_POST['name']) : "";
		$email = isset($_POST['email']) ? trim($_POST['email']) : "";
		$address2 = isset($_POST['address2']) ? trim($_POST['address2']) : "";
		$phone = isset($_POST['phone']) ? trim($_POST['phone']) : "";
		$fac = isset($_POST['fac']) ? trim($_POST['fac']) : "";
		$dpt = isset($_POST['dpt']) ? trim($_POST['dpt']) : "";
		$title = isset($_POST['title']) ? trim($_POST['title']) : "";
		$level = isset($_POST['level']) ? trim($_POST['level']) : "";
		$id = $_POST['id'];
		$photo = $_POST['photo'];

		if($name == "" || $email == "" || $address2 == "" || $phone == "" || $fac == "" || $dpt == "" || $title == "" || $level == ""){
			$error = urlencode("all fields are required");
			header("location: ../viewStaff.php?error=".$error."&id=".$id);
			return false;
		}else{
			$name = trimData($name);
			$email = trimData($email);
			$address2 = trimData($address2);
			$phone = trimData($phone);
			$fac = trimData($fac);
			$dpt = trimData($dpt);
			$title = trimData($title);
			$level = trimData($level);
		}
		
		if ($_FILES['file']['name'] != '') {
			$filename = $_FILES['file']['name'];
			$filetmp = $_FILES['file']['tmp_name'];
			$filesize = $_FILES['file']['size'];
			$filetype = $_FILES['file']['type'];
			$fileext = explode('.', $filename);
			$fileactualext = strtolower(end($fileext));

			$allow = array('jpg', 'jpeg', 'png', 'gif');
			if(in_array($fileactualext, $allow)){
				if($filesize < 8000000){
					$pic = uniqid('',true).'.'.$fileactualext;
					$filedestination = 'staffdp/'.$pic;
					
					if(move_uploaded_file($filetmp, $filedestination)){

						$sql = "UPDATE `staffs` SET `name` = '$name', `email` = '$email', `dpt` = '$dpt', `fac` = '$fac', `snum` = '$phone', `sadd` = '$address2', `stitle` = '$title', `slvl` = '$level', `sphoto` = '$pic'";
						$result = mysqli_query($connect, $sql);
						if($result){
							unlink('staffdp/'.$photo);
							$success = urlencode("staff details updated successfully!!!");
							header("location: ../viewStaff.php?success=".$success."&id=".$id);
							return false;
						}else{
							$error = urlencode("error updating staff");
							header("location: ../viewStaff.php?error=".$error."&id=".$id);
							return false;
						}
					}else{
						$failed = urlencode("error uploading picture");
						header("location: ../viewStaff.php?error=".$failed."&id=".$id);
						return false;
					}
				}else{
					$failed = urlencode("file uploaded too large");
					header("location: ../viewStaff.php?error=".$failed."&id=".$id);
					return false;
				}
			}else{
				$failed = urlencode("unsupported file format");
				header("location: ../viewStaff.php?error=".$failed."&id=".$id);
				return false;
			}
		}else{
			$sql = "UPDATE `staffs` SET `name` = '$name', `email` = '$email', `dpt` = '$dpt', `fac` = '$fac', `snum` = '$phone', `sadd` = '$address2', `stitle` = '$title', `slvl` = '$level' WHERE `id` = '$id'";
			$result = mysqli_query($connect, $sql);
			if($result){
				$success = urlencode("staff created");
				header("location: ../viewStaff.php?success=".$success."&id=".$id);
				return false;
			}else{
				$error = urlencode("error creating staff");
				header("location: ../viewStaff.php?error=".$error."&id=".$id);
				return false;
			}
		}
			
	}
	
	elseif(isset($_POST['editpass'])){

		$password = isset($_POST['password']) ? trim($_POST['password']) : "";
		$conpassword = isset($_POST['conpassword']) ? trim($_POST['conpassword']) : "";
		$id = $_POST['id'];

		if($password == "" || $conpassword == ""){
			$error = urlencode("all fields are required");
			header("location: ../viewStaff.php?error=".$error."&id=".$id);
			return false;
		}else{
			$password = trimData($password);
			$conpassword = trimData($conpassword);
		}

		if($password != $conpassword){
			$error = urlencode("password mismatch");
			header("location: ../viewStaff.php?error=".$error."&id=".$id);
			return false;
		}
		

		$sql = "UPDATE `staffs` SET `password` = '$password' WHERE `id` = '$id'";
		$result = mysqli_query($connect, $sql);
		if($result){
			$success = urlencode("staff password changed");
			header("location: ../viewStaff.php?success=".$success."&id=".$id);
			return false;
		}else{
			$error = urlencode("error editing password");
			header("location: ../viewStaff.php?error=".$error."&id=".$id);
			return false;
		}
					
			
	}
	
	
	else{
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