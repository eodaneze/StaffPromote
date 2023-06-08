<?php
	require_once('connection.php');
	
	if(isset($_POST['submit'])){

		$level = isset($_POST['level']) ? trim($_POST['level']) : "";
		$id = $_POST['id'];
		$lvl = $_POST['lvl'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$title = $_POST['title'];
		$fac = $_POST['fac'];

		if($level == ""){
			$error = urlencode("all fields are required");
			header("location: ../promote.php?error=".$error."&staffid=".$id);
			return false;
		}else{
			$level = trimData($level);
		}

		$md = date('Y-m-d');
		

		$sql = "UPDATE `staffs` SET `slvl` = '$level', `pdate` = '$md' WHERE `id` = '$id'";
		$result = mysqli_query($connect, $sql);
		if($result){
            $sql = "UPDATE `staffdoc` SET `adminseen` = 0 WHERE `staffid` = '$id'";
		    $result = mysqli_query($connect, $sql);

            // contactmail($email, $title, $name, $level, $lvl, $fac);
            
			$success = urlencode("staff password changed");
			header("location: ../promotions.php");
			return false;
		}else{
			$error = urlencode("error editing password");
			header("location: ../promote.php?error=".$error."&staffid=".$id);
			return false;
		}
					
			
	}
	
	
	else{
		$error = urlencode("please login first");
		header("location: ../index.php?error=".$error);
		return false;
	}	


    
    function contactmail($email, $title, $name, $level, $lvl, $fac){
		$to = $email;
		$subject = "Promotion";
		
		$mailcontent = '
		<div class="container">
			<div class="row">
				<div>
					<h3 class="text-center">Staff Promote</h3>
					<p>Good day... <br>
                    A big congratulations to you '.$title. ''.$name.' on your promotion from '.$level.' to '.$lvl.'.
                    We wish you the strenght and determination to keep on moving forward to greater heights. <br>
                    Congratulations once again... <br><br>
                    Courtesy:<br>
                    Dean: '.$fac.'
                    </p>
				</div>
			</div>
		</div>';
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		$headers .= 'From: <support@staffpromote.com>' . "\r\n";
		
		$sent = mail($to,$subject,$mailcontent,$headers);
		if($sent){
			return false;
		}else{
			return false;
		}
	}




	function trimData($data){
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripcslashes($data);

		return $data;
	}
?>