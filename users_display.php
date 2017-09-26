


<?php
	include 'includes/real_db.php';
	$sql="select users.id as id,users.username as username,users.full_name as fullname,users.email as email,users.password as password,
	users.contact_number as contactnumber,users.city as city,users.unpublish as unpublish,users.address as address,user_groups.name as ugname,states.name as statename from user_groups, states,users
			where user_groups.id=users.user_group_id AND states.id=users.state_id
	";
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
		<th>username</th>
		<th>Fullname</th>
		<th>Email</th>
		<th>Contact number</th>
		<th>City</th>
		<th>state id </th>
		<th>user group id</th>
		<th>Unpublish</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
	<?php
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['username']."</td>";
			echo "<td>".$row['fullname']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['contactnumber']."</td>";
			echo "<td>".$row['city']."</td>";
			echo "<td>".$row['statename']."</td>";
			echo "<td>".$row['ugname']."</td>";		
			echo "<td>".$row['unpublish']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td><a href='users_delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a>
			<a href='users_update.php?id=".$row['id']."' class='btn btn-info'>Update</a>
			<a href='users_view.php?id=".$row['id']."' class='btn btn-primary'>View</a></td>";
				

				echo "</tr>";
		}
	}
			?>
	
</table>
		
