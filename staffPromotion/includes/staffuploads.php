<?php
	require_once('connection.php');
	
	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		
		if ($_FILES['file']['name'] != '') {
			$filename = $_FILES['file']['name'];
			$filetmp = $_FILES['file']['tmp_name'];
			$filesize = $_FILES['file']['size'];
			$filetype = $_FILES['file']['type'];
			$fileext = explode('.', $filename);

            $newname1 = $fileext;
            array_pop($newname1);
            $newname1 = implode($newname1);

			$fileactualext = strtolower(end($fileext));

			$allow = array('doc', 'docx', 'pdp');
			if(in_array($fileactualext, $allow)){
				if($filesize < 8000000){
					$pic = $newname1.'.'.uniqid('',true).'.'.$fileactualext;
					$filedestination = 'staffdoc/'.$pic;
					
					if(move_uploaded_file($filetmp, $filedestination)){

						$sql = "INSERT INTO staffdoc(staffid, doc)VALUES('$id', '$pic')";
						$result = mysqli_query($connect, $sql);
						if($result){
							unlink('staffdp/'.$photo);
							$success = urlencode("document uploaded");
							header("location: ../staff/uploadDoc.php?success=".$success);
							return false;
						}else{
							$error = urlencode("error uploading document");
							header("location: ../staff/uploadDoc.php?error=".$error);
							return false;
						}
					}else{
						$failed = urlencode("error uploading file");
						header("location: ../staff/uploadDoc.php?error=".$failed);
						return false;
					}
				}else{
					$failed = urlencode("file uploaded too large");
					header("location: ../staff/uploadDoc.php?error=".$failed);
					return false;
				}
			}else{
				$failed = urlencode("unsupported file format");
				header("location: ../staff/uploadDoc.php?error=".$failed);
				return false;
			}
		}else{
			$failed = urlencode("please upload a file");
            header("location: ../staff/uploadDoc.php?error=".$failed);
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