<?php 
 include("../includes/db.php");
 
// print "<pre>";
// print_r($_REQUEST); 

if($_REQUEST['act']){
	$_REQUEST['act']();
}


function save_job_records(){
global $conn;

if($_REQUEST['id']){
	
		$sql = "UPDATE `joblist` SET `job_title` = '$_REQUEST[job_title]',`job_qualification` = '$_REQUEST[job_qualification]',`job_icon` = '$_REQUEST[job_icon]' WHERE `id` = '$_REQUEST[id]';";
			
		$rs = mysqli_query($conn, $sql);
		if($rs){
			//echo "record update";
			header("location:../job_view.php?msg= Record Update Successfully!!!!");
		}
	
}
else{
$sql = "INSERT INTO `joblist` ( `job_title`,`job_qualification`,`job_icon`) VALUES ('$_REQUEST[job_title]','$_REQUEST[job_qualification]','$_REQUEST[job_icon]');";
$rs = mysqli_query($conn, $sql);

if($rs){
	header("location:../job_view.php?msg= Record Save Successfully!!!!");
}

}


}
function delete_job_records(){
	global $conn;
	$id=$_REQUEST['id'];
	$sql="delete from joblist where id='$_REQUEST[id]'";
	$query=mysqli_query($conn, $sql);
	if($query){
		 header("location:../job_view.php?msg= record deleted successfully!!!!");
	}
	else{
		echo "not deleted";
	}
}
?>	
	