
<?php
include 'includes/real_db.php';
$sql="select * from properties where id=".$_GET['id'];
$result=mysqli_query($conn,$sql);
$title="";
$id="";
$city="";
$postalcode="";
$address="";
$propertytype="";
$price="";
$area="";
$amenities="";


while($row=mysqli_fetch_array($result)){
	$title=$row['title'];
	$id=$row['id'];
	$city=$row['city'];
	$postalcode=$row['postal_code'];
	$address=$row['address'];
	$propertytype=$row['property_type'];
	$price=$row['price'];
	$area=$row['area'];
	$amenities=$row['amenities'];
	
}
?>


<form action="property_update_data.php" method="post" class="col-md-3">
<label>Name</label>
<div class="form-group">
<input type="text" name="title" value="<?php echo $title;?>" id="title" placeholder="Enter title" required class="form-control" />
</div>
<label>City</label>
<div class="form-group">
<input type="text" name="city" value="<?php echo $city;?>" id="city" placeholder="Enter city" required class="form-control" />
</div>
<label>Postal Code</label>
<div class="form-group">
<input type="text" name="postalcode" value="<?php echo $postalcode;?>" id="postalcode" placeholder="Enter postalcode" required class="form-control" />
</div>
<label>Address</label>
<div class="form-group">
<input type="text" name="address" value="<?php echo $address;?>" id="address" placeholder="Enter address" required class="form-control" />
</div>
<label>Property Type</label>
<div class="form-group">
<input type="text" name="propertytype" value="<?php echo $propertytype;?>" id="propertytype" placeholder="Enter propertytype" required class="form-control" />
</div>
<label>Price</label>
<div class="form-group">
<input type="text" name="price" value="<?php echo $price;?>" id="price" placeholder="Enter price" required class="form-control" />
</div>
<label>Area</label>
<div class="form-group">
<input type="text" name="area" value="<?php echo $area;?>" id="area" placeholder="Enter amenities" required class="form-control" />
</div>
<label>Amenities</label>
<div class="form-group">
<input type="text" name="amenities" value="<?php echo $amenities;?>" id="amenities" placeholder="Enter area" required class="form-control" />
</div>
<input type="hidden" name="id" value="<?php echo $id;?>" required />

<div class="form-group">
<input type="submit" name="sumbit" value="Sumbit" class="btn btn-primary" />
</div>
</form>
