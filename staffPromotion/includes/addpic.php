<?php
	require_once('connection.php');

	if(isset($_POST['submit'])){
		$picname = isset($_POST['picname'])?trim($_POST['picname']): '';
		if($picname == ""){
			$error = "please enter a caption";
			header('location: ../public/addpicture.php?error='.$error);
			return false;
		}else{
			$picname = trimData($picname);
		}
		if(isset($_FILES)){
			$filename = $_FILES['file']['name'];
			$fileTmp = $_FILES['file']['tmp_name'];
			$filesize = $_FILES['file']['size'];
			$filetype = $_FILES['file']['type'];
			$fileext = explode('.', $filename);
			$fileactualext = strtolower(end($fileext));
			$allow = array('jpg', 'jpeg', 'png', 'gif');

			if(in_array($fileactualext, $allow)){
				if($filesize < 800000){
					$pic = uniqid('',true).'.'.$fileactualext;
					$filedestination = 'uploads/'.$pic;
					if(move_uploaded_file($fileTmp, $filedestination)){
						$sql = "INSERT INTO pictures(picname,img) VALUES('$picname', '$pic')";
						$result = mysqli_query($connect, $sql);
						if($result){
							$success = "details uploaded";
							header('location: ../public/addpicture.php?success='.$success);
							return false;
						}else{
							$error = "error saving details";
							header('location: ../public/addpicture.php?error='.$error);
							return false;
						} 
					}else{
						$error = "error moving file";
						header('location: ../public/addpicture.php?error='.$error);
						return false;
					}
				}else{
					$error = "file too large (8mb and below)";
					header('location: ../public/addpicture.php?error='.$error);
					return false;
				}
			}else{
				$error = "please upload an image";
				header('location: ../public/addpicture.php?error='.$error);
				return false;
			}
		}
	}else{
		$error = "please log in first";
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