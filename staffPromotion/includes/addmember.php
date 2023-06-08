<?php 
  require_once("./connection.php");

  if(isset($_POST['submit'])){
      $name = isset($_POST['name']) ? trim($_POST['name']) : "";
      $email = isset($_POST['email']) ? trim($_POST['email']) : "";
      $address2 = isset($_POST['address2']) ? trim($_POST['address2']) : "";
      $phone = isset($_POST['phone']) ? trim($_POST['phone']) : "";
      $title = isset($_POST['title']) ? trim($_POST['title']) : "";
      $level = isset($_POST['level']) ? trim($_POST['level']) : "";
      $role = isset($_POST['role']) ? trim($_POST['role']) : "";
      $sdate = isset($_POST['sdate']) ? trim($_POST['sdate']) : "";
      echo $role;

      if($name == "" || $email == "" || $address2 == "" || $phone == "" || $title == "" || $level = "" || $role = "" || $sdate = ""){
          $error = urlencode("all fields are required");
          header("location:../Hod/addMember.php?error=".$error);
          return false;
           
      }else{
          $name = trimData($name);
          $email = trimData($email);
          $address2 = trimData($address2);
          $phone = trimData($phone);
          $title = trimData($title);
          $level = trimData($level);
          $role = trimData($role);
          $sdate = trimData($sdate);
      }
      
      if($_FILES['file']['name'] != ''){
          $filename = $_FILES['file']['name'];
          $filetmp = $_FILES['file']['tmp_name'];
          $filesize = $_FILES['file']['size'];
          $filetype = $_FILES['file']['type'];
          $fileext = explode('.', $filename);
          $fileactualext = strtolower(end($fileext));

          $allow = array('jpg', 'jpeg', 'png', 'gif');
          if(in_array($fileactualext, $allow)){
               if($filesize < 8000000){
                   $pic = uniqid('', true).'.'.$fileactualext;
                   $filedestination= 'memberdp/'.$pic ;

                   if(move_uploaded_file($filetmp, $filedestination)){
                       $sql = "INSERT INTO members(name, email,phone, address2, title, level,mrole, profilepic, sdate)VALUES('$name', '$email', '$phone', '$address2', '$title', '$level','$role','$pic', '$sdate')";

                       $result = mysqli_query($connect, $sql);
                       if($result){
                           $success = urlencode("New Member have been added successfully!!");
                           header("location:../Hod/addMember.php?success=".$success);
                           return false;
                       }else{
                        $error = urlencode("error adding staff");
                        header("location: ../Hod/addMember.php?error=".$error);
                        return false;
                       } 
                       }else{
                           $failed = urlencode("error uploading picture");
                           header("location: ../Hod/addMember.php?error=".$failed);
                           return false;
                       }
                   }else{
                    $failed = urlencode("file uploaded too large");
					header("location: ../Hod/addMember.php?error=".$failed);
					return false; 
                   }
               }else{
                $failed = urlencode("unsupported file format");
				header("location: ../Hod/addMember.php?error=".$failed);
				return false;
               }
          }else{
            $error = urlencode('please upload a picture');
			header('location: ../Hod/addMember.php?error='.$error);
			return false;
          }
        //   echo $filename;
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

<a href="../Hod/addMember.php"></a>