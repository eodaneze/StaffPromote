<?php 
  require_once("./connection.php");
  if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql = "UPDATE `promtion_form` SET `seen` = 1 WHERE `id` = '$id'";
      $result = mysqli_query($connect, $sql);
      if($result){
          header("location: ../faculty/singleStaff_Promotion.php?id=$id");
}else{
header("location: ../faculty/singleStaff_Promotion.php?id=$id");
}
}else{
header("location: ../index.php");
}
?>