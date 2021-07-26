<?php  include_once "../../App/Classes/autoload.php"; ?>
<?php  
  
  $user = new User;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard-Admin</title>
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/fonts/font-awesome/css/all.css">
	<link rel="stylesheet" href="../../assets/css/dashboard.css">
	<link rel="stylesheet" href="../../assets/css/style1.css">
    


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
				<li><a href="#"><i class="fas fa-qrcode"></i>Menu</a></li>
				<li><a href="#"><i class="far fa-user"></i>Profile</a></li>
				<li><a href="#"><i class="far fa-envelope"></i>Massage</a></li>
				<li><a href="../../login.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
			</ul>
		</div>
		<section>

			 <?php  

        if( isset($_POST['user_update']) ){

          // Get value 
          $name = $_POST['name'];
          $email = $_POST['email'];
          $phn = $_POST['phn'];
          $padd = $_POST['padd'];
          $pradd = $_POST['pradd'];
          $propic = $_POST['propic'];
          $userType = $_POST['userType'];
          
              $data = $user -> userUpdateProfile($name, $email, $phn, $padd , $pradd , $propic, $userType);
              if(  $data  == true ){
                $mess = "<p style='color:green;text-align:center; font-size:14px; font-weight:normal;'> Update successfull </p>";

              }

       }

    ?>


			<div class="body-item">
				<h2>Update Account</h2>
				<?php  

         			 if (isset($mess)) {
            		echo $mess;
            		header("location:../../login.php");
         			 }


       			?>

				 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<table class="table">
					<tr>
						<td>Name</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" ></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td><input type="number" name="phn"></td>
					</tr>
					<tr>
						<td>Parmanent Adderss</td>
						<td><input type="text" name="padd"></td>
					</tr>
					<tr>
						<td>Present Address</td>
						<td><input type="text" name="pradd"></td>
					</tr>
					<tr>
						<td>Profile Picture</td>
						<td><input type="file" name="propic"></td>
					</tr>
					<tr>
						<td>User Type</td>
						<td>
							<select name="userType">
								<option value="Flat Owner">Flat Owner</option>
								<option value="Tanent">Tanent</option>
								<option value="Staff">Staff</option>
								<option value="Security">Security</option>
								<option value="Service Provider">Service Provider</option>
							</select>
						</td>
					</tr>
					<tr>
						<td><input class="btn btn-primary btn-sm" type="submit" name="user_update" value="Update"></td>
					</tr>

				</table>
				</form>
			</div>
		</section>





	<script type="../../assets/js/jquery-3.4.1.min.js"></script>
	<script type="../../assets/js/popper.min.js"></script>
	<script type="../../assets/js/bootstrap.min.js"></script>
</body>
</html>