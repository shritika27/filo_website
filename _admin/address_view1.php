<?php
	include("includes/header.php");
	include("includes/db.php");

	/*if(isset($_REQUEST['id'])){
		$sec_sql = "select * from country_details where id = '$_REQUEST[id]'";
		$sec_rs = mysqli_query($conn, $sec_sql);
		$data = mysqli_fetch_assoc($sec_rs);
		// print "<pre>";
		// print_r($data);
	}*/

	if(isset($_POST['submit'])){

		$country=$_POST['country'];
		$state=$_POST['state'];
		$url=$_POST['url'];

		$sql="insert into country_details(country,state,map_url)values('$country','$state','$url')";
		$query=mysqli_query($conn,$sql);
		if ($query){

			echo "result inserted";
		}
		else {
			echo "not insert";
		}
	}

?>
<div class="main-panel">
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card quiz_card">
	<h4 style="text-align:center;">Country Add Form</h4>
   <form class="form-horizontal" action="address_view1.php" enctype="multipart/form-data" method="post">
     <div class="form-group">
      <label class="control-label col-sm-2 quiz_title" for="sec_ques_name"> Country Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="country" placeholder="Enter country name" name="country" value="">
   
 </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 quiz_title" for="sec_ques_name"> State:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="state" placeholder="Enter state" name="state" value="">
   
 </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 quiz_title" for="sec_ques_name"> Map Url:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="url" placeholder="Enter map url" name="url" value="">
   
 </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-12" style="text-align:center;">
        <button type="submit" name="submit" class="btn btn-default" >Submit</button>
		
		<input type="hidden" name="act" value="save_country_records"/>
		<input type="hidden" name="id" value="" />
		
		
      </div>
    </div>
      </form>
</div>
</div>
<div class="col-md-12">
<div class="card">

   <form name="security_question_view" action="lib/country.php">
     <h5><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg']; }?></h5>
		<div class="content table-responsive table-full-width">
		<table class="table table-hover table-striped">
			<thead>
				<th>Country details</th>
				<th>action</th>
			</thead>
			<tbody>
			<?php
			    global $conn;
				$sql = "select * from country_details";
				$rs = mysqli_query($conn, $sql);
				while($data = mysqli_fetch_assoc($rs)){
				
			?>
			<tr>
				<td><?php echo $data['country'];?></td>
				<td><?php echo $data['state'];?></td>
				<td><?php echo $data['map_url'];?></td>
								
				<td><a href="address_view1.php?id=<?php echo $data['id'];?>"><img src="images/edit.png" height="18"></a> <a href="<?php echo $data['id'];?>;"> <img src="images/del.png" height="18"> </a> </td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
	</div>
	<input type="hidden" name="act"/>
	<input type="hidden" name="id"/>
      </form>
</div>
</div>
</div>
</div>


<?php
	include("includes/footer.php");
?>