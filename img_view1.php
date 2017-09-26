<?php include 'includes/header.php';?>
	


		<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">
<?php
	include 'includes/real_db.php';
	$sql="select * from images where id='".$_GET['id']."'";
	$result=mysqli_query($conn,$sql);
?>
<table border="1" class='table table-bordered table-striped'>
	<tr>
		<th>Name</th>
		
	</tr>
	<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
		
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