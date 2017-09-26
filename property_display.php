

<?php
	include 'includes/real_db.php';
	$sql="select properties.id as id, properties.title as title,properties.city as city,properties.postal_code as postalcode,properties.address as address,
	properties.property_type as propertytype,properties.price as price,properties.area as area,properties.amenities as amenities, states.name as statename from properties,states where states.id=properties.state_id ";
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
		<th>id</id>
		<th >Title</th>
		<th>City</th>
		<th>state id</th>
		<th>Postal code</th>
		<th>Address</th>
		<th>Property type</th>
		<th>Price</th>
		<th>Area</th>
		<th>Amenities</th>
		<th>Action</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['title']."</td>";
			echo "<td>".$row['city']."</td>";
			echo "<td>".$row['statename']."</td>";
			echo "<td>".$row['postalcode']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['propertytype']."</td>";
			echo "<td>".$row['price']."</td>";
			echo "<td>".$row['area']."</td>";
			echo "<td>".$row['amenities']."</td>";
			echo "<td><a href='property_delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
			<a href='property_update.php?id=".$row['id']."' class='btn btn-info'>Update</a>
			<a href='property_view.php?id=".$row['id']."' class='btn btn-primary'>View</a>
			<a href='img_upload.php?id=".$row['id']."' class='btn btn-success'>Upload</a></td>";

				echo "</tr>";
		}
	}
			?>
	
</table>
		
