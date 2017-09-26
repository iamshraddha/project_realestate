<?php
include 'includes/real_db.php';
if($_POST){
	$sql="update images SET name='".$_POST['name']."' where id=".$_POST['id']."";
	mysqli_query($conn,$sql);
	header('location:img_display1.php');
}
?>
