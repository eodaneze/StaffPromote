<?php
	require_once('connection.php');
	session_start();
	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
	}else{
		$error = urlencode("please login first");
		header('location: index.php?error='.$error);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<style>
  .container .gallery embed{
    margin: 20px;
  }
</style>
<body>
<div>
	
</div>