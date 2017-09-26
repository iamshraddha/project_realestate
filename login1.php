<?php
	include 'includes/header.php';

	include 'includes/real_db.php';
	
	if($_POST)
	{
		$sql="select * from users where username='".$_POST['username']."' AND password='".$_POST['password']."' ";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			
			$_SESSION['login']=1;
			while($row=mysqli_fetch_array($result)){
			
				$_SESSION['user']=$row;
				
			}
			echo "<h4>you are successfuly login</h4>";
						
		}
		else
		{
			echo "user name or password is wrong";
			//header("location:index.php");
			
		}
		
	}
?>

<?php
$date=date('y-m-d h:i:s');
$email="ss@gmail.com";
echo md5($date.$email);


?>
<div id="fh5co-main" class="f1">
			


			<div class="container">
				
			<div class="row">

<form action="" class="col-md-6" method="post">
	<div class="form-group">
		<label>username</label>
		<input type="text" name="username" value="" required placeholder="enter name" class="form-control" />
	</div>
	
	<div class="form-group">
		<label>password</label>
		<input type="password" name="password" value="" required placeholder="enter password" class="form-control" />
	</div>

	<input type="submit" name="submit" value="login" class="btn btn-primary" />
	
</form>

</div>
				<!-- END row -->
				
			</div>
			<!-- END container -->

		
		</div>

<?php
	include 'includes/footer.php';
?>

