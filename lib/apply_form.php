<?php 
	include("../includes/db.php");
	 
	print "<pre>";
	print_r($_REQUEST);
	
	if(isset($_REQUEST['act'])){
		$_REQUEST['act']();
	}

	function save_apply_record(){
		global $conn;
		
		
		$sql = "INSERT INTO `career_apply_form` (`name`, `email`, `mobile`, `resume`) VALUES ('$_REQUEST[name]', '$_REQUEST[email]', '$_REQUEST[phone]', '$_REQUEST[Image]');";
		$rs = mysqli_query($conn, $sql);
		if($rs){
			header("location:../index.php?msg=Apply Successfully!!!");
		}
	}
?>
