<?php include 'includes/header.php';?>
	
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
		$("#ermsg").text("name");
		return false;
	}
	
	if($("#citys").val()==""|| $("#citys").val().length<=3)
	{
		//alert("enter the city");
		$("#ermsg").text("Enter city");
		return false;
	}
	
	if($("#addresses").val()=="")
	{
		//alert("enter the addresses");
		$("#ermsg").text("Enter address");
		return false;
	}
	
	if($("#contacts").val()==""|| $("#contacts").val().length!=10 || isNaN($("#contacts").val()))
	{
		//alert("enter the contact number");
		$("#ermsg").text("Enter contact number");
		return false;
	}
	
	if($("#emails").val()==""|| $("#emails").val().length<=3)
	{
		//alert("enter the email");
		$("#ermsg").text("Enter email");
		return false;
	}
	
	if($("#mess").val()=="")
	{
		//alert("enter the message");
		$("#ermsg").text("Enter message");
		return false;
	}
	
	return true;

}

</script>

		<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">
			
			<form action="enq_submit.php" method="post" class="col-md-3">

<label>name</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="name" value="" id="name" placeholder="Enter name" required class="form-control" />
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

<label>Address</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="address" value="" id="addresses" placeholder="address" required class="form-control" />
</div>

<label>Contact number</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="contactnumber" value="" id="contacts"  placeholder="Enter contact number" required class="form-control" />
</div>


<label>Email</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="email" value="" id="emails" placeholder="Enter email" required class="form-control" />
</div>

<label>Message</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="message" value="" id="mess" placeholder="Enter message" required class="form-control" />
</div>
<div class="form-group">
<label>property ID</label>
<select name="propertyid" class="form-control">
<?php 
include 'includes/real_db.php';
$sql3="select * from properties";
	$result3=mysqli_query($conn,$sql3);
	while($row=mysqli_fetch_array($result3))
		{
			?>
		<option value="<?php echo $row["id"]; ?>"><?php echo $row["title"];?></option>
		
		<?php
		
		}

?>
</select>
</div>




<div class="form-group">
<input type="submit" onclick="return myfunction();" name="sumbit" value="Sumbit" class="btn btn-primary" />
</div>
</form>
				
			</div>
				<!-- END row -->
				
			</div>
			<!-- END container -->

		
		</div>
		<!-- END fhtco-main -->


<?php include 'includes/footer.php';?>