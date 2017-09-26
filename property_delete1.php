	<?php
	include "includes/real_db.php";
	$sql="delete from properties where id='".$_GET['id']."'";
	mysqli_query($conn,$sql);
	header('location:property_display1.php');
	?>