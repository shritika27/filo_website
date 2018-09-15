<?php 
 include("../includes/db.php");
 
// print "<pre>";
// print_r($_REQUEST); 

if($_REQUEST['act']){
	$_REQUEST['act']();
}


function save_country_records(){
global $conn;

if($_REQUEST['id']){
	
		$sql = "UPDATE `country_details` SET `country` = '$_REQUEST[country]',`state` = '$_REQUEST[state]',`map_url` = '$_REQUEST[map_url]' WHERE `id` = '$_REQUEST[id]';";
			
		$rs = mysqli_query($conn, $sql);
		if($rs){
			//echo "record update";
			header("location:../address_view.php?msg= Record Update Successfully!!!!");
		}
	
}
else{
$sql = "INSERT INTO `country_details` ( `country`,`state`,`map_url`) VALUES ('$_REQUEST[country]','$_REQUEST[state]','$_REQUEST[map_url]');";
$rs = mysqli_query($conn, $sql);

if($rs){
	header("location:../address_view.php?msg= Record Save Successfully!!!!");
}

}

}
function delete_address_records(){
	global $conn;
	$id=$_REQUEST['id'];
	$sql="delete from country_details where id='$_REQUEST[id]'";
	$query=mysqli_query($conn, $sql);
	if($query){
		 header("location:../address_view.php?msg= record deleted successfully!!!!");
	}
	else{
		echo "not deleted";
	}
}
?>	
	
