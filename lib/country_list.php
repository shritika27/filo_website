<?php
include("../includes/db.php");
 print"<pre>";
 print_r($_REQUEST);

if($_REQUEST['act']){
	$_REQUEST['act']();	
}

function save_country_details(){
	global $conn;
	$sql = "INSERT INTO `country_details` (`country`, `state`, `map_url`) VALUES ('$_REQUEST[country]', '$_REQUEST[state]', '$_REQUEST[map_url]');";
	$rs = mysqli_query($conn, $sql);
	if($rs){
		
		echo "Save country details";
	}
	
}
?>