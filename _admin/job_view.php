<?php
	include("includes/header.php");
	if(isset($_SESSION['email'])) {

	if(isset($_REQUEST['id'])){
		$sec_sql = "select * from joblist where id = '$_REQUEST[id]'";
		$sec_rs = mysqli_query($conn, $sec_sql);
		$data = mysqli_fetch_assoc($sec_rs);
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
	<h2 style="text-align:center;">Job Add Form</h2>
   <form class="form-horizontal" action="lib/job.php" enctype="multipart/form-data" method="post">
     <div class="form-group">
      <label class="control-label col-sm-2 quiz_title" for="sec_ques_name"> Job Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sec_ques_name" placeholder="Enter job title" name="job_title" value="<?php if(isset($data['job_title'])){echo $data['job_title']; }?>">
   
 </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 quiz_title" for="sec_ques_name"> Job Qualification:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sec_ques_name" placeholder="Enter job qualification" name="job_qualification" value="<?php if(isset($data['job_qualification'])){echo $data['job_qualification']; }?>">
   
 </div>
    </div>
    <div class="form-group">
      <textarea class="control-label col-sm-2 quiz_title" for="sec_ques_name"> Job Description:</textarea>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sec_ques_name" placeholder="Enter job Description" name="job_icon" value="<?php if(isset($data['job_icon'])){echo $data['job_icon']; }?>">
   
 </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-12" style="text-align:center;">
        <button type="submit" class="btn btn-default" >Submit</button>
		
		<input type="hidden" name="act" value="save_job_records"/>
		<input type="hidden" name="id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
		
		
      </div>
    </div>
      </form>
</div>
</div>
<div class="col-md-12">
<div class="card">

   <form name="job_view" action="lib/job.php">
     <h5><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg']; }?></h5>
		<div class="content table-responsive table-full-width">
		<table class="table table-hover table-striped">
			<thead>
				<th>job title</th>
				<th>job qualification</th>
				<th>job description</th>
				<th>action</th>
			</thead>
			<tbody>
			<?php
			    global $conn;
				$sql = "select * from joblist";
				$rs = mysqli_query($conn, $sql);
				while($data = mysqli_fetch_assoc($rs)){
				
			?>
			
			<tr>
				<td><?php echo $data['job_title'];?></td>
				<td><?php echo $data['job_qualification'];?></td>
				<td><?php echo $data['job_icon'];?></td>				
				<td><a href="job_view.php?id=<?php echo $data['id'];?>"><img src="images/edit.png" height="18"></a> | <a href="javascript:delete_job_records(<?php echo $data['id'];?>);"> <img src="images/del.png" height="18"> </a> </td>
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