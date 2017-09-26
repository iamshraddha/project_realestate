<?php
$servername="localhost";
$username="root";
$password="";
$dbname="real";
$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
			    mysqli_connect_error();   
	}
	if($_POST)
	{
	$sql='INSERT INTO images(name,property_id) values("'.$_POST["name"].'",'.$_POST["propertyid"].')';
		echo $sql;
	if(mysqli_query($conn,$sql))
		{
				echo"record inserted";
				header("location:img1.php");
		}
		
		else
		if (!mysqli_query($conn,$sql))
		  {
		  echo("Error description: " . mysqli_error($conn));
		  }
}
mysqli_close($conn);
?>
