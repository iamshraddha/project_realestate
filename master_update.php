





<?php
include 'includes/real_db.php';
$sql="select * from user_groups where id=".$_GET['id'];
$result=mysqli_query($conn,$sql);
$username="";
$id="";
$unpublished=0;

while($row=mysqli_fetch_array($result)){
	$username=$row['name'];
	$id=$row['id'];
	$unpublished=$row['unpublish'];
	
}
?>


<form action="master_update_data.php" method="post" class="col-md-3">
<label>Name</label>
<div class="form-group">
<input type="text" name="name" value="<?php echo $username;?>" id="user" placeholder="Enter Name" required class="form-control" />
</div>
<input type="hidden" name="id" value="<?php echo $id;?>" required />
<label>Published</label>
<div class="form-group">
<?php
	if($unpublished==1)
	{
?>
<input type="radio" name="unpublish"  checked value="1" required> Unpublish
<input type="radio" name="unpublish"  value="0" required> Publish <br />

<?php
	}
	if($unpublished==0)
	{
?>
<input type="radio" name="unpublish"  value="1" required> Unpublish
<input type="radio" name="unpublish"  value="0" checked  required> Publish <br />
<?php
	}
	?>
</div>
<div class="form-group">
<input type="submit" name="sumbit" value="Sumbit" class="btn btn-primary" />
</div>
</form>
