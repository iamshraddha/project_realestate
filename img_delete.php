	<?php
	include "includes/real_db.php";
	$sql="delete from images where id='".$_GET['id']."'";
	mysqli_query($conn,$sql);
	header('location:img_display.php');
	?>