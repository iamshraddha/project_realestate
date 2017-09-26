<?php include 'includes/header.php';?>
	


		<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">
			
<?php
	include 'includes/real_db.php';
	$sql="select * from enquiries where id='".$_GET['id']."'";
	$result=mysqli_query($conn,$sql);
?>
<table border="1" class='table table-bordered table-striped'>
	<tr>
		<th>Name</th>
		<th>City</th>
		<th>Address</th>
		<th>Contact number</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Message</th>
		<th>Action</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['city']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['contact_number']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['message']."</td>";
			echo "</tr>";
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