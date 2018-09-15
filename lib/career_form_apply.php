<?php 
	include("../includes/db.php");
	 
	//print "<pre>";
	//print_r($_REQUEST);
	
	if(isset($_REQUEST['act'])){
		$_REQUEST['act']();
	}


	function save_records(){
		global $conn;


		$img = $_FILES['resume']['name'];
		if($img){

			$img_arr = explode(".", $img);
			// print "<pre>";
			// print_r($img_arr);
			$profile_img = $img_arr[0].time().".".$img_arr[1];
			//echo $profile_img;
			move_uploaded_file($_FILES['resume']['tmp_name'], "../uploads/career_apply_form/".$profile_img);
		}
		else{
			$profile_img = $_REQUEST['resume'];
			
		}
		if($_REQUEST['id']){
			
				$sql = "UPDATE `career_form_apply` SET `name` = '$_REQUEST[name]', `email` = '$_REQUEST[email]', `number` = '$_REQUEST[number]', `resume` = '$profile_img' WHERE `id` = '$_REQUEST[id]';";
				
				$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
				
				if($rs){
					header("location:../index.php?msg=Record Update Successfully!!");
				}
			
		}
		else{
		$sql = "INSERT INTO `career_form_apply` (`name`, `email`, `number`, `resume`) VALUES ('$_REQUEST[name]', '$_REQUEST[email]', '$_REQUEST[number]', '$profile_img');";

		$rs = mysqli_query($conn, $sql);

		if($rs){
			
			header("location:../../index.php?msg=Apply Successfully!!");
		}

		}
	}