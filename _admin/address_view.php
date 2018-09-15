<?php
	include("includes/header.php");
       if(isset($_SESSION['email'])) {
//echo $_SESSION['email'];
	if(isset($_REQUEST['id'])){
		$add_sql = "select * from country_details where id = '$_REQUEST[id]'";
		$add_rs = mysqli_query($conn, $add_sql);
		$data = mysqli_fetch_assoc($add_rs);
		// print "<pre>";
		// print_r($data);
	}
   }else{
		   header("location:index.php?msg=please login first");
	   }
	   

?>


<div class="main-panel">
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card quiz_card">
	<h2 style="text-align:center;">Country Add Form</h2>
   <form class="form-horizontal" action="lib/country.php" enctype="multipart/form-data" method="post">
     <div class="form-group">
      <label class="control-label col-sm-2 quiz_title" for="sec_ques_name"> Country Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sec_ques_name" placeholder="Enter country name" name="country" value="<?php if(isset($data['country'])){echo $data['country']; }?>">
   
 </div>
    </div>
    <div class="form-group">
      <textarea class="control-label col-sm-2 quiz_title" > State:</textarea>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sec_ques_name" placeholder="Enter state" name="state" value="<?php if(isset($data['state'])){echo $data['state']; }?>">
   
 </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 quiz_title" for="sec_ques_name"> Map Url:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sec_ques_name" placeholder="Enter map url" name="map_url" value="<?php if(isset($data['map_url'])){echo $data['map_url']; }?>">
   
 </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-12" style="text-align:center;">
        <button type="submit" class="btn btn-default" >Submit</button>
		
		<input type="hidden" name="act" value="save_country_records"/>
		<input type="hidden" name="id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
		
		
      </div>
    </div>
      </form>
</div>
</div>
<div class="col-md-12">
<div class="card">

   <form name="address_view" action="lib/country.php">
     <h5><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg']; }?></h5>
		<div class="content table-responsive table-full-width">
		<table class="table table-hover table-striped">
			<thead>
				<th>Country details</th>
				<th>state details</th>
				<th>map url details</th>
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
				<td><a href="address_view.php?id=<?php echo $data['id'];?>"><img src="images/edit.png" height="18"></a> | <a href="javascript:delete_address_records(<?php echo $data['id'];?>);"> <img src="images/del.png" height="18"> </a> </td>
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