
<style>
#ermsg{
	color:blue;
}
</style>

<script>
function myfunction(){
	if($("#title").val()==""|| $("#title").val().length<=3)
	{
		alert("enter the title");
		$("#ermsg").text("Enter title");
		return false;
	}
	else if($("#city").val()==""|| $("#city").val().length<=3)
	{
		alert("enter the city");
		$("#ermsg").text("Enter city");
		return false;
	}
	else if($("#postalcode").val()=="")
	{
		alert("enter the postalcode");
		$("#ermsg").text("Enter postalcode");
		return false;
	}
	else if($("#address").val()==""|| $("#address").val().length<=3)
	{
		alert("enter the address");
		$("#ermsg").text("Enter address");
		return false;
	}
	else if($("#propertytype").val()==""|| $("#propertytype").val().length<=3)
	{
		alert("enter the propertytype");
		$("#ermsg").text("Enter propertytype");
		return false;
	}
	else if($("#price").val()=="")
	{
		alert("enter the price");
		$("#ermsg").text("Enter price");
		return false;
	}
	else if($("#area").val()==""|| $("#area").val().length<=3)
	{
		alert("enter the area");
		$("#ermsg").text("Enter area");
		return false;
	}
	else if($("#amenities").val()==""|| $("#amenities").val().length<=3)
	{
		alert("enter the amenities");
		$("#ermsg").text("Enter amenities");
		return false;
	}
	
	
	return true;

}

</script>


<form action="property_submit.php" method="post" class="col-md-3">
<label>Name</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="title" value="" id="title" placeholder="Enter title" required class="form-control" />
</div>
<label>City</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="city" value="" id="city" placeholder="Enter city" required class="form-control" />
</div>

<label>state ID</label>
<div class="form-group">
<select name="stateid" class="form-control">
<?php 
include 'includes/real_db.php';
$sql3="select * from states";
	$result3=mysqli_query($conn,$sql3);
	while($row=mysqli_fetch_array($result3))
		{
			?>
		<option value="<?php echo $row["id"]; ?>"><?php echo $row["name"];?></option>
		
		<?php
		
		}

?>
</select>

</div>

<label>Postal Code</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="postalcode" value="" id="postalcode" placeholder="Enter postalcode" required class="form-control" />
</div>
<label>Address</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="address" value="" id="address" placeholder="Enter address" required class="form-control" />
</div>
<label>Property Type</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="propertytype" value="" id="propertytype" placeholder="Enter propertytype" required class="form-control" />
</div>
<label>Price</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="price" value="" id="price" placeholder="Enter price" required class="form-control" />
</div>
<label>Area</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="area" value="" id="area" placeholder="Enter area" required class="form-control" />
</div>
<label>Amenities</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="amenities" value="" id="amenities" placeholder="Enter amenities" required class="form-control" />
</div>

<div class="form-group">
<input type="submit" onclick="return myfunction();" name="sumbit" value="Sumbit" class="btn btn-primary" />
</div>
</form>
