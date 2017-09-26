	<?php
	include "includes/real_db.php";
	$sql="delete from user_groups where id='".$_GET['id']."'";
	mysqli_query($conn,$sql);
	header('location:master_display.php');
	?>