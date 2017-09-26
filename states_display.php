
<?php
	include 'includes/real_db.php';
	$sql="select * from states";
	$result=mysqli_query($conn,$sql);
	echo mysqli_num_rows($result);
	if(mysqli_num_rows($result)==0)
	{
		echo "no record";
	}
	else
	{
?>
<table border="1" class='table table-bordered table-striped table-hover'>
	<tr class="danger">
		<th>Name</th>
		<th>Action</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td><a href='states_delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
			<a href='states_update.php?id=".$row['id']."' class='btn btn-info'>Update</a>
			<a href='states_view.php?id=".$row['id']."' class='btn btn-primary'>View</a></td>";
				

				echo "</tr>";
		}
	}
			?>
	
</table>
		
