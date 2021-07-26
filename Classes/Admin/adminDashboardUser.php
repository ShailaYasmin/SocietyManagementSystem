<?php  include_once "../../App/Classes/autoload.php"; ?>
<?php  
  
  $conn = new User;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard-Admin</title>
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/dashboard.css">
	<link rel="stylesheet" href="../../assets/css/style1.css">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome/css/all.css">


</head>
<body>
	

		<input type="checkbox" id="check">
		<label for="check">
			<i class="fas fa-bars" id="btn"></i>
			<i class="fas fa-times" id="cancel"></i>
		</label>
		<div class="slidebar">
			<header>Dashboard</header>
			<ul>
				<li><a href="adminHome.php"><i class="fas fa-qrcode"></i>Home</a></li>
				<li><a href="#"><i class="far fa-user"></i>Profile</a></li>
				<li><a href="#"><i class="far fa-envelope"></i>Massage</a></li>
				<li><a href="#"><i class="fab fa-staylinked"></i>Service</a></li>
				<li><a href="#"><i class="fas fa-users"></i>Users</a></li>
				<li><a href="#"><i class="fas fa-exclamation-triangle"></i>Complain</a></li>
				<li><a href="../../login.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
			</ul>
		</div>
		<section>
			<div class="tB">
				<table class="table table-striped">
				<thead>
					<tr>
						<th>SL</th>
						<th>Name</th>
						<th>Email</th>
						<th>UserType</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>


				<?php

					if( isset($_GET['user'])){
						$user_type=$_GET['user'];
						$sql="";

						if($user_type == 'all'){
							$sql = "SELECT * FROM user";

						}
						else if($user_type == 'inactive'){
							$sql = "SELECT * FROM user where Status = '$user_type'";

						}
						else{
							$sql = "SELECT * FROM user where userType = '$user_type' ";

						}

						echo $user_type;


						$data = $conn -> connection() ->  query($sql);
						$i= 1;
						while($single_data = $data -> fetch_assoc() ) :

					?>
					<tr>
						<th><?php echo $i; $i++?></th>
						<th><?php echo $single_data['name']?></th>
						<th><?php echo $single_data['email']?></th>
						<th><?php echo $single_data['userType']?></th>
						<th><?php echo $single_data['Status']?></th>
						<th>
							<a class="btn btn-success btn-sm" href="#">View</a>
							<a class="btn btn-primary btn-sm" href="../../App/Classes/approve_user.php?email=<?php echo $single_data['email']?> & user=<?php echo $single_data['Status']?>">Change Status</a>
							<a class="btn btn-danger btn-sm" href="../../App/Classes/user_delete.php?email=<?php echo $single_data['email']?> & user=<?php echo $single_data['userType']?>">Delete</a>
						</th>
					</tr>
				<?php 


					endwhile; 
					}

				?>
					
				</tbody>
			</table>
			</div>

			
		</section>


	<script type="../../assets/js/jquery-3.4.1.min.js"></script>
	<script type="../../assets/js/popper.min.js"></script>
	<script type="../../assets/js/bootstrap.min.js"></script>
	
</body>
</html>