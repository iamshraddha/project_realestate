



<style>
#ermsg{
	color:blue;
}
</style>

<script>
function myfunction(){
	if($("#user").val()==""|| $("#user").val().length<=3)
	{
		alert("enter the user");
		$("#ermsg").text("user");
		return false;
	}
	
	if($("#full").val()==""|| $("#full").val().length<=3)
	{
		//alert("enter the fullname");
		$("#ermsg").text("Enter fullname");
		return false;
	}
	
	if($("#emails").val()==""|| $("#emails").val().length<=3)
	{
		//alert("enter the email");
		$("#ermsg").text("Enter email");
		return false;
	}
	if($("#passwords").val()==""|| $("#passwords").val().length<=3)
	{
		//alert("enter the password");
		$("#ermsg").text("Enter password");
		return false;
	}
	
	if($("#contacts").val()==""|| $("#contacts").val().length!=10 || isNaN($("#contacts").val()))
	{
		//alert("enter the 10 digits contact number");
		$("#ermsg").text("Enter 10 digits contact number");
		return false;
	}

	if($("#citys").val()==""|| $("#citys").val().length<=3)
	{
		//alert("enter the city");
		$("#ermsg").text("Enter city");
		return false;
	}
	
	
	
	
else if (!$('input[name=unpublish]:checked').val() )     
	{
		alert("select radio button");
		return false;
	}
	
	if($("#addresses").val()=="")
	{
		//alert("enter the addresses");
		$("#ermsg").text("Enter address");
		return false;
	}
	
	return true;

}

</script>




<form action="users_submit.php" method="post" class="col-md-3">
<label>Master</label>
<select name="user_group_id" class="form-control">
<?php 
include 'includes/real_db.php';
$sql3="select * from user_groups";
	$result3=mysqli_query($conn,$sql3);
	while($row=mysqli_fetch_array($result3))
		{
			?>
		<option value="<?php echo $row["id"];?>"><?php echo $row["name"]; ?></option>
		
		<?php
		
		}

?>
</select>
<label>Username</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="username" value="" id="user" placeholder="Enter user" required class="form-control" />
</div>

<label>fullname</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="fullname" value="" id="full" placeholder="Enter fullname" required class="form-control" />
</div>

<label>Email</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="email" value="" id="emails" placeholder="Enter email" required class="form-control" />
</div>

<label>Password</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="password" name="password" value="" id="passwords" placeholder="Enter Password" required class="form-control" />
</div>

<label>Contact number</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="contactnumber" value="" id="contacts"  placeholder="Enter contact number" required class="form-control" />
</div>

<label>City</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="city" value="" id="citys" placeholder="Enter city" required class="form-control" />
</div>
	
<div class="form-group">
<label>state ID</label>
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


<label>Published</label>
<div class="form-group">
<input type="radio" name="unpublish"  value="1" required> Unpublish
<input type="radio" name="unpublish"  value="0" required> Publish <br />
</div>

<label>Address</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="address" value="" id="addresses" placeholder="address" required class="form-control" />
</div>

<div class="form-group">
<input type="submit" onclick="return myfunction();" name="sumbit" value="Sumbit" class="btn btn-primary" />
</div>
</form>

