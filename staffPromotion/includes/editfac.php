<?php
	require_once('connection.php');
	
	if(isset($_POST['editfac'])){

		$name = isset($_POST['name']) ? trim($_POST['name']) : "";
		$email = isset($_POST['email']) ? trim($_POST['email']) : "";
		$id = $_POST['id'];
		$photo = $_POST['photo'];

		if($name == "" || $email == ""){
			$error = urlencode("all fields are required");
			header("location: ../editfac.php?error=".$error."&id=".$id);
			return false;
		}else{
			$name = trimData($name);
			$email = trimData($email);
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
					$filedestination = 'facdp/'.$pic;
					
					if(move_uploaded_file($filetmp, $filedestination)){

						$sql = "UPDATE `faculty` SET `name` = '$name', `email` = '$email'  WHERE `id` = '$id'";
						$result = mysqli_query($connect, $sql);
						if($result){
							unlink('facdp/'.$photo);
							$success = urlencode("staff details updated");
							header("location: ../editfac.php?success=".$success."&id=".$id);
							return false;
						}else{
							$error = urlencode("error updating staff");
							header("location: ../editfac.php?error=".$error."&id=".$id);
							return false;
						}
					}else{
						$failed = urlencode("error uploading picture");
						header("location: ../editfac.php?error=".$failed."&id=".$id);
						return false;
					}
				}else{
					$failed = urlencode("file uploaded too large");
					header("location: ../editfac.php?error=".$failed."&id=".$id);
					return false;
				}
			}else{
				$failed = urlencode("unsupported file format");
				header("location: ../editfac.php?error=".$failed."&id=".$id);
				return false;
			}
		}else{
			$sql = "UPDATE `faculty` SET `name` = '$name', `email` = '$email' WHERE `id` = '$id'";
			$result = mysqli_query($connect, $sql);
			if($result){
				$success = urlencode("staff created");
				header("location: ../editfac.php?success=".$success."&id=".$id);
				return false;
			}else{
				$error = urlencode("error creating staff");
				header("location: ../editfac.php?error=".$error."&id=".$id);
				return false;
			}
		}
			
	}
	
	elseif(isset($_POST['editpas'])){

		$password = isset($_POST['password']) ? trim($_POST['password']) : "";
		$id = $_POST['id'];

		if($password == ""){
			$error = urlencode("all fields are required");
			header("location: ../editfac.php?error=".$error."&id=".$id);
			return false;
		}else{
			$password = trimData($password);
		}

		$sql = "UPDATE `faculty` SET `password` = '$password' WHERE `id` = '$id'";
		$result = mysqli_query($connect, $sql);
		if($result){
			$success = urlencode("staff password changed");
			header("location: ../editfac.php?success=".$success."&id=".$id);
			return false;
		}else{
			$error = urlencode("error editing password");
			header("location: ../editfac.php?error=".$error."&id=".$id);
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