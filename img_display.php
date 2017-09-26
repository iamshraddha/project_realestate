
<?php
	include 'includes/real_db.php';
	$sql="select images.id as id,images.name as name,properties.title as propertytitle from properties,images where properties.id=images.property_id";
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
		<th>id</th>
		<th>Name</th>
		<th>property id</th>
		<th>Action</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['propertytitle']."</td>";
			echo "<td><a href='img_delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
			<a href='img_update.php?id=".$row['id']."' class='btn btn-info'>Update</a>
			<a href='img_view.php?id=".$row['id']."' class='btn btn-primary'>View</a></td>";
				

				echo "</tr>";
		}
	}
			?>
	
</table>
		
