


<?php
	include 'includes/real_db.php';
	$sql="select * from user_groups";
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
	<tr class="danger" >
		<th>Name</th>
		<th>Published</th>
		<th>Action</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['unpublish']."</td>";
			echo "<td><a href='master_delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
			<a href='master_update.php?id=".$row['id']."' class='btn btn-info'>Update</a>
			<a href='master_view.php?id=".$row['id']."' class='btn btn-primary'>View</a></td>";
				

				echo "</tr>";
		}
	}
			?>
	
</table>
		
