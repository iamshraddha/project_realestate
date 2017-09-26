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
		$("#ermsg").text("Enter name");
		return false;
	}
	
	
	return true;

}

</script>

		<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">
			
			
<form action="states_submit.php" method="post" class="col-md-3">

<label>State Name</label>
<div class="form-group">
<span id="ermsg"></span>

<input type="text" name="name" value="" id="name" placeholder="Enter Name" required class="form-control" />
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