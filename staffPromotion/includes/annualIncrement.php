<?php  
  require("./connection.php");
  if(isset($_POST['submit'])){
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";

    if($name == '' || $email == ''){
        $error = urlencode("all fields are required");
			header("location: ../staff/annual_increment.php?error=".$error);
			return false;
    }else{
        $sql = "INSERT INTO annual_increment(name, email) VALUES('$name', '$email')";
        $result = mysqli_query($connect, $sql);

        if($result){
            $success = urlencode("Annual Increment have been applied successfully");
			header("location: ../staff/annual_increment.php?success=".$success);
			return false;
        }else{
            $error = urlencode("Error submitting form");
			header("location: ../staff/annual_increment.php?error=".$error);
			return false;
        }
    }
  }

?>