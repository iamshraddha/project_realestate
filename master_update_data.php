<?php
include 'includes/real_db.php';
if($_POST){
	$sql="update user_groups SET name='".$_POST['name']."',unpublish=".$_POST['unpublish']." where id=".$_POST['id']."";
	mysqli_query($conn,$sql);
	header('location:master_display1.php');
}
?>
