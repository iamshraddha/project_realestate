<?php include 'includes/header.php';?>
	


		<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">
			
<?php
	include 'includes/real_db.php';
	$sql="select properties.id as id, properties.title as title,properties.city as city,properties.postal_code as postalcode,properties.address as address,images.name as imgs,
	properties.property_type as propertytype,properties.price as price,properties.area as area,properties.amenities as amenities, states.name as statename from properties,states,images where states.id=properties.state_id AND properties.id=images.property_id";
	
	
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
		<th>pics</th>
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
			
			echo "<td><img src='/realestate/img/" .$row['imgs']."'class='img img-responsive' /></td>";
		 
			echo "<td><a href='property_view_users.php?id=".$row['id']."' class='btn btn-primary'>View</a></td>";

				echo "</tr>";
		}
	}
			?>
	
</table>
				
			</div>
				<!-- END row -->
				
			</div>
			<!-- END container -->

		
		</div>
		<!-- END fhtco-main -->


<?php include 'includes/footer.php';?>