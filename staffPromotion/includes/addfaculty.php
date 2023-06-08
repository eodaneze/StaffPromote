<?php
	require_once('connection.php');
	
	if(isset($_POST['submit'])){

		$name = isset($_POST['name']) ? trim($_POST['name']) : "";
		$email = isset($_POST['email']) ? trim($_POST['email']) : "";
		$dname = isset($_POST['dname']) ? trim($_POST['dname']) : "";
		// $phone = isset($_POST['phone']) ? trim($_POST['phone']) : "";
		// $fac = isset($_POST['fac']) ? trim($_POST['fac']) : "";
		// $dpt = isset($_POST['dpt']) ? trim($_POST['dpt']) : "";
		$title = isset($_POST['title']) ? trim($_POST['title']) : "";
		// $level = isset($_POST['level']) ? trim($_POST['level']) : "";
		// $sdate = isset($_POST['sdate']) ? trim($_POST['sdate']) : "";
		$password = isset($_POST['password']) ? trim($_POST['password']) : "";

		if($name == "" || $email == "" || $password == "" || $dname == "" || $title == ""){
			$error = urlencode("all fields are required");
			header("location: ../addfaculty.php?error=".$error);
			return false;
		}else{
			$name = trimData($name);
			$email = trimData($email);
			$dname = trimData($dname);
			// $phone = trimData($phone);
			// $fac = trimData($fac);
			// $dpt = trimData($dpt);
			$title = trimData($title);
			// $level = trimData($level);
			// $sdate = trimData($sdate);
			$password = trimData($password);
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

						$sql = "INSERT INTO faculty(dname, title, name, email, password, sphoto)VALUES('$dname', '$title','$name', '$email', '$password', '$pic')";
						$result = mysqli_query($connect, $sql);
						if($result){
							$success = urlencode("Faculty created");
							header("location: ../addfaculty.php?success=".$success);
							return false;
						}else{
							$error = urlencode("error creating Faculty");
							header("location: ../addfaculty.php?error=".$error);
							return false;
						}
					}else{
						$failed = urlencode("error uploading picture");
						header("location: ../addfaculty.php?error=".$failed);
						return false;
					}
				}else{
					$failed = urlencode("file uploaded too large");
					header("location: ../addfaculty.php?error=".$failed);
					return false;
				}
			}else{
				$failed = urlencode("unsupported file format");
				header("location: ../addfaculty.php?error=".$failed);
				return false;
			}
		}else{
			$error = urlencode('please upload a picture');
			header('location: ../addfaculty.php?error='.$error);
			return false;
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