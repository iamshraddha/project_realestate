




<style>
#ermsg{
	color:blue;
}
</style>
<link rel='stylesheet' href='/realestate/css/bootstrap.css'>
<script src="/realestate/js/jquery-3.2.1.min.js"></script>
<script src="/realestate/js/bootstrap.js"></script>
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

