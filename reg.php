<!doctype html>
<html>
<head>
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
	if($("#name1").val()=="")
	{
		//alert("enter the name");
		$("#ermsg").text("name");
		return false;
	}
	
	else if($("#midname").val()=="")
	{
		//alert("enter the midname");
		$("#ermsg").text("Enter midname");
		return false;
	}
	
	else if($("#surname").val()=="")
	{
		//alert("enter the surname");
		$("#ermsg").text("Enter surname");
		return false;
	}
	
	else if($("#contact").val()==""|| isNaN($("#contact").val()))
	{
		//alert("enter contact number");
		$("#ermsg").text("Enter contact number");
		return false;
	}

	else if($("#address").val()=="")
	{
		//alert("enter the address");
		$("#ermsg").text("Enter address");
		return false;
	}
	
	
	
	
else if (!$('input[name=gender]:checked').val() )     
	{
		alert("select radio button");
		return false;
	}
	
	return true;

}

</script>
</head>
<body>
<form action="" method="post">
<span id="ermsg"></span>
<label> Name</label>
<input type="text" name="name1" value="" id="name1" required /><br /><br />


<label> Midname</label>
<input type="text" name="midname" value="" id="midname" required /><br /><br />

<label> Surname</label>
<input type="text" name="surname" value="" id="surname" required /><br /><br />

<label>Contact number</label>
<input type="text" name="contact" value="" id="contact" required /><br /><br />

<label>Address</label>
<input type="text" name="address" value="" id="address" required /><br /><br />

<input type="radio" name="gender" value="male" required />Male
<input type="radio" name="gender" value="female" required />Female <br /><br />

<select name="student">
<option value="student1">student1</option>
<option value="student2">student2</option>
<option value="student3">student3</option>
<option value="student4">student4</option>
</select><br /><br />

<input type="submit"  onclick="return myfunction();" name="submit" class="btn btn-primary" value="Sumbit" />
 
</body>
</html>