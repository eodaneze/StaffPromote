<?php
	require_once("connection.php");

	$output = "";

	$word = $_POST['keyword'];

	$query = "SELECT * FROM staffs WHERE fullname LIKE '%".$word."%'";

	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0){
		$output.= '<h4 align="center"> SEARCH RESULT </h4>';
		$output.= 	'<div class="table-responsive">
						<table class="table table-bordered">
							<tr>
								<th>S/N</th>
								<th>FULLNAME</th>
								<th>GENDER</th>
								<th>ADDRESS</th>
								<th>PHONE</th>
							</tr>';
		while($row = mysqli_fetch_assoc($result)){
			$id = $row['id'];
			$fullname = $row['fullname'];
			$gender = $row['gender'];
			$addresss = $row['addresss'];
			$phone = $row['phone'];

			$output.= '<tr>
							<td>'.$id.'</td>
							<td>'.$fullname.'</td>
							<td>'.$gender.'</td>
							<td>'.$addresss.'</td>
							<td>'.$phone.'</td>
						</tr>';
		}
		$output.= '</table></div>';
		echo $output;
	}else{
		echo "staff not found";
	}


?>