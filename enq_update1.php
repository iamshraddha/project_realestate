<?php include 'includes/header.php';?>
	


		<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">
<?php
include 'includes/real_db.php';
$sql="select * from enquiries where id=".$_GET['id'];
$result=mysqli_query($conn,$sql);
$name="";
$id="";
$city="";
$address="";
$contactnumber="";
$email="";
$message="";

while($row=mysqli_fetch_array($result)){
	$name=$row['name'];
	$id=$row['id'];
	$city=$row['city'];
	$address=$row['address'];
	$contactnumber=$row['contact_number'];
	$email=$row['email'];
	$message=$row['message'];

	
}
?>


<form action="enq_update_data.php" method="post" class="col-md-3">
<label>Name</label>
<div class="form-group">
<input type="text" name="name" value="<?php echo $name;?>" id="full" placeholder="Enter fullname" required class="form-control" />
</div>

<label>City</label>
<div class="form-group">
<input type="text" name="city" value="<?php echo $city;?>" id="citys" placeholder="Enter city" required class="form-control" />
</div>

<label>Address</label>
<div class="form-group">
<input type="text" name="address" value="<?php echo $address;?>" id="addresses" placeholder="address" required class="form-control" />
</div>

<label>Contact number</label>
<div class="form-group">
<input type="text" name="contactnumber" value="<?php echo $contactnumber;?>" id="contacts"  placeholder="Enter contact number" required class="form-control" />
</div>


<label>Email</label>
<div class="form-group">
<input type="text" name="email" value="<?php echo $email;?>" id="emails" placeholder="Enter email" required class="form-control" />
</div>


<input type="hidden" name="id" value="<?php echo $id;?>" required />


<label>Message</label>
<div class="form-group">
<input type="text" name="message" value="<?php echo $message;?>" id="full" placeholder="Enter fullname" required class="form-control" />
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