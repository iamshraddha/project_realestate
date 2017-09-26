<?php
include 'includes/real_db.php';
if($_POST){
	$sql="update enquiries SET name='".$_POST['name']."',
	city='".$_POST['city']."',address='".$_POST['address']."',
	contact_number=".$_POST['contactnumber'].",email='".$_POST['email']."',
	message='".$_POST['message']."' where id=".$_POST['id']." ";
	if (!mysqli_query($conn,$sql))
  {
  echo("Error description: " . mysqli_error($conn));
  }
  else{

	header('location:enq_display1.php');
  }
}
?>
