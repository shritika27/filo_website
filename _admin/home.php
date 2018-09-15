<?php 

	include("includes/header.php");
      if(!isset($_SESSION['email'])) {
		  header("location:index.php?msg=please login first");
	  }
	//if(isset($_SESSION['id'])){
	//$sql = "select * from address_detail where id = '$_SESSION[id]'";
	//$rs = mysqli_query($conn, $sql);
	//$data = mysqli_fetch_assoc($rs);
	// print "<pre>";
	//print_r($data);
	//}
	
?>
<h1 style="text-align: center;"> welcome to admin dashboard</h1>   
           

<?php include("includes/footer.php"); ?>
