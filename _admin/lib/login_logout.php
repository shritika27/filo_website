<?php
session_start(); 
 include("../includes/db.php");
 
// print "<pre>";
// print_r($_REQUEST); 

if($_REQUEST['act']){
	$_REQUEST['act']();
}


function logout(){
	global $conn;
	if(isset($_SESSION['email'])){
		$_SESSION['email'] = "";
		session_destroy();
		header("location:../index.php?msg=logout successfully!!");
	}
}
?>	
	