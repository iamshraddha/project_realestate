	<?php
	include "includes/real_db.php";
	$sql="delete from users where id='".$_GET['id']."'";
	mysqli_query($conn,$sql);
	header('location:users_display.php');
	?>