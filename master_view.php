
<?php
	include 'includes/real_db.php';
	$sql="select * from user_groups where id='".$_GET['id']."'";
	$result=mysqli_query($conn,$sql);
?>
<table border="1" class='table table-bordered table-striped'>
	<tr>
		<th>Name</th>
		<th>Published</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['unpublish']."</td>";
			echo "</tr>";
		}
	
			?>
	
</table>
		
