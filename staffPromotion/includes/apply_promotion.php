<?php
require_once("./connection.php");
  if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $faculty = $_POST['faculty'];
      $dept = $_POST['dept'];
      $paf = $_POST['paf'];
      $noa = $_POST['noa'];
      $noj = $_POST['noj'];
      $url = $_POST['url'];
      $url1 = $_POST['url1'];
      $topic = $_POST['topic'];
      $place = $_POST['place'];
      $topic1 = $_POST['topic1'];
      $place1 = $_POST['place1'];
      
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $error = urlencode("please enter a proper email");
          header("location: ../staff/applyPromotion.php?error=".$error);
          return false;
      }else{
          $md = date("Y-m-d H:m:s");
          $sql = "INSERT INTO promtion_form(name, email,'dept',faculty, position, noa, noj, url1, url2, topic, place, topic1, place1, createddate)VALUES('$name', '$email','$dept' '$faculty', '$paf', '$noa', '$noj', '$url', '$url1', '$topic', '$place', '$topic', '$place1', '$md')";

          $result = mysqli_query($connect, $sql);
          if($result){
            $success = urlencode("Promotion form submitted successfully");
            header("location: ../staff/applyPromotion.php?success=".$success);
            return false;
          }else{
            $error = urlencode("Error trying to submit form");
            header("location: ../staff/applyPromotion.php?error=".$error);
            return false;
          }
      }
  }else{
    header("location: ../index.php");
    return false;
  }
?>