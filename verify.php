<?php
	include 'includes/header.php';
	
	include 'includes/real_db.php';
	$sql="select * from users where token='".$_GET["token"]."' ";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==0)
	{
		echo "user is not registered.please register by using link";
		echo "<a href='users1.php'>register</a>";
	}
	else
	{
		echo "congrats your account is verified and active";
		$sql2="Update users set inactive=1 where token='".$_GET['token']."'
		";
		mysqli_query($conn,$sql2);
	}
	?>
	<?php include 'includes/footer.php';?>