<?php include 'includes/header.php';?>
	


		<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">
			<table border="1" class='table table-bordered table-striped'>
	<tr>
		<th>Title</th>
		<th>City</th>
		<th>Postal code</th>
		<th>Address</th>
		<th>Property type</th>
		<th>Price</th>
		<th>Area</th>
		<th>Amenities</th>
		<th>Name</th>
	</tr>
			
<?php
	include 'includes/real_db.php';
	
	if(isset($_GET['id'])){
	
			//$sql="select * from properties where id='".$_GET['id']."'";
		$sql="select properties.title,properties.city,properties.postal_code,properties.address,properties.property_type,properties.price ,properties.area,properties.amenities,images.name as imgs
		 from properties,images
		 where properties.id=images.property_id AND properties.id=".$_GET['id']." ";
 
		/*$sql="select properties.* ,images.name as imgs
		 from properties
		 left join images on properties.id=images.property_id where properties.id=".$_GET['id']." ";*/
		 
		 	 $result=mysqli_query($conn,$sql);
?>



	<?php
	   
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['title']."</td>";
			echo "<td>".$row['city']."</td>";
			echo "<td>".$row['postal_code']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['property_type']."</td>";
			echo "<td>".$row['price']."</td>";
			echo "<td>".$row['area']."</td>";
			echo "<td>".$row['amenities']."</td>";
			echo "<td>".$row['imgs']."</td>";
			echo "</tr>";
		
		}
			?>
	
</table>
<?php
		 $sql2="select properties.* ,images.name as imgs
		 from properties
		 left join images on properties.id=images.property_id where properties.id=".$_GET['id']." ";
		$result2=mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2)>0)
		{
			while($row2=mysqli_fetch_array($result2))
			{
				if($row2['imgs']==null)
				{
					echo "<img src='/realestate/img/noimg.gif' class='img img-responsive' />";
				}
				else
				{
				
		 
					echo "<img src='/realestate/img/" .$row2['imgs']."' class='img img-responsive' />";
				}
			}
		}
	
			//echo "<a href='del_img.php?id=".$_GET['id']." '>delete</a>";
}
				

	
?>

				
			</div>
				<!-- END row -->
				
			</div>
			<!-- END container -->

		
		</div>
		<!-- END fhtco-main -->


<?php include 'includes/footer.php';?>