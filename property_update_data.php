<?php
include 'includes/real_db.php';
if($_POST){
	$sql="update properties set title='".$_POST['title']."',city='".$_POST['city']."',postal_code=".$_POST['postalcode'].",
	address='".$_POST['address']."',property_type='".$_POST['propertytype']."',price=".$_POST['price'].",area='".$_POST['area']."',
	amenities='".$_POST['amenities']."' where id=".$_POST['id']." ";
	if (!mysqli_query($conn,$sql))
  {
  echo("Error description: " . mysqli_error($conn));
  }
  else{

	header('location:property_display1.php');
  }
}
?>
