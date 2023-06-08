<?php 
  require_once("./connection.php");

  if(isset($_POST['submit'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $dob = $_POST['dob'];
       $phone =  $_POST['phone'];
       $docr = $_POST['docr'];
       $faculty = $_POST['faculty'];
       $dept = $_POST['dept'];
       $dofa = $_POST['dofa'];
       $gofa =  $_POST['gofa'];
       $doca =  $_POST['doca'];
       $goca = $_POST['goca'];
       $aconfirm =  $_POST['aconfirm'];
       $doc =  $_POST['doc'];
       $salary =  $_POST['salary'];
       $aqualification =  $_POST['aqualification'];
       $dclass =  $_POST['dclass'];
       $dinstitution =  $_POST['dinstitution'];
       $adate =  $_POST['adate'];
       $pqualification =  $_POST['pqualification'];
       $abody =  $_POST['abody'];
       $adate2 =  $_POST['adate2'];
       $einstitution = $_POST['einstitution'];
       $role =  $_POST['role'];
       $specialization = $_POST['specialization'];
       $subject = $_POST['subject'];
       $days =  $_POST['days'];
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = urlencode("please enter a proper email");
        header("location: ../staff/performance_report.php?error=".$error);
        return false;
       }else{
           $md = date('Y-m-d H:i:s');
           $sql = "INSERT INTO report(name, dob, email, mobileno, docr, faculty, dept, dofa, gofa, doca, goca, confirmed, doc, salary, aqualification, dclass, dinstitution, dodaward, pqualification, abody, daward, einstitution, role, specialization, subject, days,createddate)VALUES('$name', '$dob', '$email', '$phone', '$docr', '$faculty', '$dept', '$dofa', '$gofa', '$doca', '$goca','$aconfirm', '$doc', '$salary', '$aqualification', '$dclass', '$dinstitution', '$adate', '$pqualification', '$abody', '$adate2', '$einstitution', '$role', '$specialization', '$subject', '$days', '$md')";
           $result = mysqli_query($connect, $sql);
           echo $result;
           die();
           if($result){
            $success = urlencode("registration successful");
            header("location: ../staff/performance_report.php?success=".$success);
            return false;
           }else{
            $error = urlencode("Error submitting report");
            header("location: ../staff/performance_report.php?success=".$error);
            return false;
           }
       }

       
  }

  function trimDate($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
    echo $data;

    return $data;
  }

?>