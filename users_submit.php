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
		
		$sql="select * from users where username='".$_POST['username']."' OR email='".$_POST['email']."' ";
		$result=mysqli_query($conn,$sql);
		
		
		if(mysqli_num_rows($result)>0)
		{
			echo "<h4>use is present</h4>";
			?>
			<a href="users1.php">Registration</a>
	<?php
		}
		else
		{
			$date=Date('y-m-d h:i:s');
			
	$sql2='INSERT INTO users(username,full_name,email,password,contact_number,city,state_id,token,unpublish,address) 
	values("'.$_POST["username"].'","'.$_POST["fullname"].'","'.$_POST["email"].'",
	"'.$_POST["password"].'","'.$_POST["contactnumber"].'","'.$_POST["city"].'",'.$_POST["stateid"].',"'.md5($_POST["email"].$date).'",
	'.$_POST["unpublish"].',"'.$_POST["address"].'")';
	//echo $sql;
	if(mysqli_query($conn,$sql2))
		{
			$subject="hi";
			$to=$_POST['email'];
			$from="xyz@gmail.com";
			$msg=" dear ".$_POST['username'].",
			
			thank u for your registration
			
			username=".$_POST['username']."
			password=".$_POST['password']."
			please verify your account by clicking below link
			<a href='verify.php?token=".md5($_POST['email'].$date)."'>click here</a>
			";
			
			
			//mail($to,$subject,$msg);
			echo $msg;
			echo "thank you for your registration.please activate your account from an email";
			
				echo"record inserted";
				header("location:property1.php");
		}
	}
		
		/*else
		if (!mysqli_query($conn,$sql2))
		  {
		  echo("Error description: " . mysqli_error($conn));
		  }*/
}
mysqli_close($conn);
?>
