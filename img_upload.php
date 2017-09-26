

<?php
	include 'includes/real_db.php';
	/*mkdir("1");*/
	if($_POST)
	{
		move_uploaded_file($_FILES["filename"]["tmp_name"],"img/".$_FILES["filename"]["name"]);
		
		$sql="select * from properties";
		
			
			if(empty($_FILES["filename"]["name"]))
			{
				echo "image not uploaded ";
			}
			else
			{
				$id="";
				$sql="insert into images (name,property_id) values('".$_FILES['filename']['name']."','".$_POST['propertyid']."')";
				mysqli_query($conn,$sql);
				echo "user has uploaded files";
			}
		
		
	}
?>


<div class="container">
<form action="" class="col-md-6" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label>file</label>
		<input type="file" name="filename" value="" required placeholder="file" class="form-control" />
		<input type="hidden" name="propertyid" value="<?php echo $_GET['id']; ?>" required placeholder="file" class="form-control" />
	</div>

	<input type="submit" name="submit" value="upload" class="btn btn-primary">
	
</form>
</div>