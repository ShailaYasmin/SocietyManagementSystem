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
			/*grid system bootstrap*/
		</div>
		<section>
		  <h1>All Users</h1>
			<div class="user py-5">
				<div class="container">
					<div class="row mt-20 ">
						<div class="col-xl-4">
							<div class="single-user">
								<img src="../../assets/image/Flat-Owner.svg">
								<a href="adminDashboardUser.php?user=<?php echo 'all'?>">All Users</a>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="single-user">
								<img src="../../assets/image/Flat-Owner.svg">
								<a href="adminDashboardUser.php?user=<?php echo 'inactive'?>">Pending Users</a>
							</div>
						</div>
					</div>
					<div class="row mt-20 ">
						<div class="col-xl-4">
							<div class="single-user">
								<img src="../../assets/image/Flat-Owner.svg">
								<a href="adminDashboardUser.php?user=<?php echo 'flatOwner'?>">Flat Owner</a>
							</div>
						</div>
	

						<div class="col-xl-4">
							<div class="single-user">
								<img src="../../assets/image/tanent.svg">
								<a href="adminDashboardUser.php?user=<?php echo 'tanent'?>">Tanent</a>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="single-user">
								<img src="../../assets/image/service.svg">
								<a href="adminDashboardUser.php?user=<?php echo 'service'?>">Service Provider</a>
							</div>
						</div>
					</div>
					<div class="row py=10">
						<div class="col-xl-4">
							<div class="single-user">
								<img src="../../assets/image/security.svg">
							    <a href="adminDashboardUser.php?user=<?php echo 'security'?>">Security</a>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="single-user">
								<img src="../../assets/image/staff.svg">
								<a href="adminDashboardUser.php?user=<?php echo 'staff'?>">Staff</a>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="single-user">
								<img src="../../assets/image/normal-user.svg">
								<a href="adminDashboardUser.php?user=<?php echo 'Normal'?>">Normal User</a>
							</div>
						</div>
					</div>	
			    </div>
			</div>

		
		</section>


	<script type="../../assets/js/jquery-3.4.1.min.js"></script>
	<script type="../../assets/js/popper.min.js"></script>
	<script type="../../assets/js/bootstrap.min.js"></script>
	
</body>
</html>