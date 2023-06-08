<?php 
require_once("./connection.php");
require_once("../header.php");
if(isset($_POST['submit'])){
    $ass_name = $_POST['ass_name'];
    $grade = $_POST['grade'];
    
    $sql = "INSERT INTO  faculty_promotionassessment(ass_name, grade) VALUES('$ass_name', '$grade')";
    $result = mysqli_query($connect, $sql);
    if($result){
        $success = urlencode("Staff Grade have been added successfullty");
        header("location:../faculty/facultyDashboard.php?success=".$success);
    }
    
    }else{
        header('location:../index.php');
    }
?>