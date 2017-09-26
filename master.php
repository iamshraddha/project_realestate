

<style>
#ermsg{
	color:blue;
}
</style>

<script>
function myfunction(){
	if($("#user").val()==""|| $("#user").val().length<=3)
	{
		alert("enter the name");
		$("#ermsg").text("Enter name");
		return false;
	}
	
	
else if (!$('input[name=unpublish]:checked').val() )     
	{
		alert("select radio button");
		return false;
	}
	
	return true;

}

</script>


		<div class="container">
			
	<form action="master_submit.php" method="post" class="col-md-3">
<label>Name</label>
<div class="form-group">
<span id="ermsg"></span>
<input type="text" name="name" value="" id="user" placeholder="Enter Name" required class="form-control" />
</div>
<label>Published</label>
<div class="form-group">
<input type="radio" name="unpublish"  value="1" required> Unpublish
<input type="radio" name="unpublish"  value="0" required> Publish <br />
</div>
<div class="form-group">
<input type="submit" onclick="return myfunction();" name="sumbit" value="Sumbit" class="btn btn-primary" />
</div>
</form>


		

		
		</div>

