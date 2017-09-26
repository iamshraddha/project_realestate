<?php
include 'includes/real_db.php';
if($_POST){
	$sql="update states SET name='".$_POST['name']."' where id=".$_POST['id']."";
	mysqli_query($conn,$sql);
	header('location:states_display1.php');
}
?>
