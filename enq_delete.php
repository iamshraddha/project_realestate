	<?php
	include "includes/real_db.php";
	$sql="delete from enquiries where id='".$_GET['id']."'";
	mysqli_query($conn,$sql);
	header('location:enq_display.php');
	?>