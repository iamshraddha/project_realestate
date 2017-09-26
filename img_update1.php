<?php include 'includes/header.php';?>
	


		<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">
<?php
include 'includes/real_db.php';
$sql="select * from images where id=".$_GET['id'];
$result=mysqli_query($conn,$sql);
$name="";
$id="";

while($row=mysqli_fetch_array($result)){
	$name=$row['name'];
	$id=$row['id'];
	
}
?>


<form action="img_update_data.php" method="post" class="col-md-3">
<label>Name</label>
<div class="form-group">
<input type="text" name="name" value="<?php echo $name;?>" id="user" placeholder="Enter Name" required class="form-control" />
</div>
<input type="hidden" name="id" value="<?php echo $id;?>" required />
<div class="form-group">
<input type="submit" name="sumbit" value="Sumbit" class="btn btn-primary" />
</div>
</form>
				
			</div>
				<!-- END row -->
				
			</div>
			<!-- END container -->

		
		</div>
		<!-- END fhtco-main -->


<?php include 'includes/footer.php';?>