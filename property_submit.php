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
	$sql='INSERT INTO properties(title,city,state_id,postal_code,address,property_type,price,area,amenities,user_id) 
	values("'.$_POST["title"].'","'.$_POST["city"].'",'.$_POST["stateid"].','.$_POST["postalcode"].',"'.$_POST["address"].'",
	"'.$_POST["propertytype"].'",'.$_POST["price"].',"'.$_POST["area"].'","'.$_POST["amenities"].'",'.$_POST["userid"].')';
	echo $sql;
	if(mysqli_query($conn,$sql))
		{
				echo"record inserted";
				header("location:property_display1.php");
		}
		
		else
		if (!mysqli_query($conn,$sql))
		  {
		  echo("Error description: " . mysqli_error($conn));
		  }
}
mysqli_close($conn);
?>
