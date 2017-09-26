	<?php
	include "includes/real_db.php";
	$sql="delete from states where id='".$_GET['id']."'";
	mysqli_query($conn,$sql);
	header('location:states_display.php');
	?>