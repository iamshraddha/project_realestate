
<?php
	include 'includes/real_db.php';
	$sql="select * from users where id='".$_GET['id']."'";
	$result=mysqli_query($conn,$sql);
?>
<table border="1" class='table table-bordered table-striped'>
	<tr>
		<th>username</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Password</th>
		<th>Contact number</th>
		<th>City</th>
		<th>Unpublish</th>
		<th>Address</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['full_name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "<td>".$row['contact_number']."</td>";
			echo "<td>".$row['city']."</td>";
			echo "<td>".$row['unpublish']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "</tr>";
		}
	
			?>
	
</table>
		
