<?php 
  require("./connection.php");
  if(isset($_POST['add'])){
       $ass_name = $_POST['ass_name'];

       if($ass_name == ""){
           $error = urlencode("fill out this field first");
           header("location:../addAssessment_sheet.php?error=".$error);
       }else{
           $sql = "INSERT INTO assessment_grade(ass_name)VALUES('$ass_name')";
           $result = mysqli_query($connect, $sql);
           if($result){
            $success = urlencode("Assessment sheet have been added successfully");
            header("location:../addAssessment_sheet.php?success=".$success);
           }
       }
  }else{
      header("location:../index.php");
  }


?>