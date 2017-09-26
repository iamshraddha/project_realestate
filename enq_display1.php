<?php include 'includes/header.php';?>
	


		<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">
<?php
	include 'includes/real_db.php';
	$sql="select enquiries.id as id,enquiries.name as name,enquiries.city as city,enquiries.address as address,enquiries.contact_number as contactnumber,enquiries.email as email,enquiries.message as message,states.name as statename,properties.title as propertytitle from enquiries,states,properties where states.id=enquiries.state_id AND properties.id=enquiries.property_id";
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
		<th>City</th>
		<th>state id</th>
		<th>Address</th>
		<th>Contact number</th>
		<th>Email</th>
		<th>Message</th>
		<th>property id</th>
		<th>Action</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['city']."</td>";
			echo "<td>".$row['statename']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['contactnumber']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['message']."</td>";
			echo "<td>".$row['propertytitle']."</td>";
			
			echo "<td><a href='enq_delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
			<a href='enq_update1.php?id=".$row['id']."' class='btn btn-info'>Update</a>
			<a href='enq_view1.php?id=".$row['id']."' class='btn btn-primary'>View</a></td>";
				

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