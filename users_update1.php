<?php include 'includes/header.php';?>
	


		<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">
			
<?php
include 'includes/real_db.php';
$sql="select * from users where id=".$_GET['id'];
$result=mysqli_query($conn,$sql);
$username="";
$id="";
$fullname="";
$email="";
$password="";
$contactnumber="";
$city="";
$unpublished=0;
$address="";


while($row=mysqli_fetch_array($result)){
	$username=$row['username'];
	$id=$row['id'];
	$fullname=$row['full_name'];
	$email=$row['email'];
	$password=$row['password'];
	$contactnumber=$row['contact_number'];
	$city=$row['city'];
	$unpublished=$row['unpublish'];
	$address=$row['address'];
	
}
?>


<form action="users_update_data.php" method="post" class="col-md-3">
<label>username</label>
<div class="form-group">
<input type="text" name="username" value="<?php echo $username;?>" id="full" placeholder="Enter fullname" required class="form-control" />
</div>
<input type="hidden" name="id" value="<?php echo $id;?>" required />
<label>fullname</label>
<div class="form-group">
<input type="text" name="fullname" value="<?php echo $fullname;?>" id="full" placeholder="Enter fullname" required class="form-control" />
</div>

<label>Email</label>
<input type="text" name="email" value="<?php echo $email;?>" id="emails" placeholder="Enter email" required class="form-control" />
</div>

<label>Password</label>
<input type="password" name="password" value="<?php echo $password;?>" id="passwords" placeholder="Enter Password" required class="form-control" />
</div>

<label>Contact number</label>
<div class="form-group">
<input type="number" name="contactnumber" value="<?php echo $contactnumber;?>" id="contacts"  placeholder="Enter contact number" required class="form-control" />
</div>

<label>City</label>
<div class="form-group">
<input type="text" name="city" value="<?php echo $city;?>" id="citys" placeholder="Enter city" required class="form-control" />
</div>



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
<label>Address</label>
<div class="form-group">
<input type="text" name="address" value="<?php echo $address;?>" id="addresses" placeholder="address" required class="form-control" />
</div>
<div class="form-group">
<input type="submit" name="sumbit" value="Sumbit" class="btn btn-primary" />
</div>
</form>
				
			</div>
				<!-- END row -->
				
			</div>
			<!-- END container -->

		
		</div>
		<!-- END fhtco-main -->


<?php include 'includes/footer.php';?>