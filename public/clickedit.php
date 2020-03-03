<?php 
	include "../config/config.php";
	$id = $_GET['id'];
	session_start();
	$_SESSION['test']=$id;
	session_encode();

	header('location:index.php#popupedit');
 ?>