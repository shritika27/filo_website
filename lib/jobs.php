<?php
include("../includes/db.php");
 print"<pre>";
 print_r($_REQUEST);

if($_REQUEST['act']){
	$_REQUEST['act']();	
}

function save_jobpost(){
	global $conn;
	$sql = "INSERT INTO `joblist` (`job_title`, `job_qualification`, `job_icon`) VALUES ('$_REQUEST[job_title]', '$_REQUEST[job_qualification]', '$_REQUEST[job_icon]');";
	$rs = mysqli_query($conn, $sql);
	if($rs){
		
		echo "Save job Post";
	}
	
}
?>