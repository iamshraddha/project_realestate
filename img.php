
<style>
#ermsg{
	color:blue;
}
</style>

<script>
function myfunction(){
	if($("#name").val()==""|| $("#name").val().length<=3)
	{
		alert("enter the name");
		$("#ermsg").text("Enter name");
		return false;
	}
	
	
	return true;

}

</script>



<form action="img_submit.php" method="post" class="col-md-3">
<label>Name</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="name" value="" id="name" placeholder="Enter Name" required class="form-control" />
</div>

<label>property id</label>
<select name="propertyid" class="form-control">
<?php 
include 'includes/real_db.php';
$sql3="select * from properties";
	$result3=mysqli_query($conn,$sql3);
	while($row=mysqli_fetch_array($result3))
		{
			?>
		<option value="<?php echo $row["id"];?>"><?php echo $row["title"]; ?></option>
		
		<?php
		
		}

?>

<div class="form-group">
<input type="submit" onclick="return myfunction();" name="sumbit" value="Sumbit" class="btn btn-primary" />
</div>
</form>
