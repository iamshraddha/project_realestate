<?php
include 'includes/real_db.php';
if($_POST){
	$sql="update users set username='".$_POST['username']."',full_name='".$_POST['fullname']."',email='".$_POST['email']."',
		password='".$_POST['password']."',contact_number='".$_POST['contactnumber']."',city='".$_POST['city']."',
			unpublish=".$_POST['unpublish'].",address='".$_POST['address']."' where id=".$_POST['id']." ";
	mysqli_query($conn,$sql);
	header('location:users_views11.php');
}
?>
