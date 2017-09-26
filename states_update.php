
<?php
include 'includes/real_db.php';
$sql="select * from states where id=".$_GET['id'];
$result=mysqli_query($conn,$sql);
$name="";
$id="";

while($row=mysqli_fetch_array($result)){
	$name=$row['name'];
	$id=$row['id'];
	
}
?>


<form action="states_update_data.php" method="post" class="col-md-3">
<label>Name</label>
<div class="form-group">
<input type="text" name="name" value="<?php echo $name;?>" id="user" placeholder="Enter Name" required class="form-control" />
</div>
<input type="hidden" name="id" value="<?php echo $id;?>" required />
<div class="form-group">
<input type="submit" name="sumbit" value="Sumbit" class="btn btn-primary" />
</div>
</form>

