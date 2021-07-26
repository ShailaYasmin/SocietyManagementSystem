<?php


	/**
 	* 
	 */
	class user extends Database
	{
	
		function __construct()
		{
		# code...
		}
	/**
		 * USer registration System 
		 */
		public function userRegistraion($name, $email, $pass_hash)
		{	
			$sql = "INSERT INTO user (name, email, pass,userType, status) VALUES ('$name','$email','$pass_hash','Normal','inactive')";
			$data = $this -> connection() -> query($sql);
	
			if($data){
				return true;
			}else{
			return false;
			}
		}

		 /**
		 * update user account
		 */

		public function userUpdateProfile($name, $email, $phn, $padd , $pradd , $propic, $userType)
		{	
			$sql = "UPDATE user SET phone='$phn',PermanentAddress='$padd', PresentAddress='$pradd',ProfilePicture='$propic',userType='$userType' WHERE email='$email'";
			$data = $this -> connection() -> query($sql);
	
			if($data){
				return true;
			}else{
				return false;
			}
		}

		/**
		 * Email check 
		 */
		public function emailCheck($email)
		{
			$sql = "SELECT * FROM user WHERE email = '$email'";
			$data = $this -> connection() -> query($sql);

			$row =  $data -> num_rows;

			if( $row == 1 ){
				return false;
			}else{
				return true;
			}

		}


		/**
		 * User Login System 
		 */

		public function userLoginSystem($email, $pass)
		{
			$sql = "SELECT * FROM user WHERE email = '$email'";
			$data = $this -> connection() -> query($sql);

			$single_user_data = $data -> fetch_assoc();

			// user check
			$row =  $data -> num_rows;

			if( $single_user_data['Status']=='active' ){

				if( password_verify( $pass , $single_user_data['pass'] ) == true ){
					if ($single_user_data['userType']=='admin') {

						header("location:Classes/Admin/adminHome.php");
					}
					elseif ($single_user_data['userType']=='service') {
						header("location:Classes/ServiceProvider/serviceDashboard.php");
					}
					elseif ($single_user_data['userType']=='staff') {
						header("location:Classes/Staff/staffDashboard.php");
					}
					elseif ($single_user_data['userType']=='Tanent') {
						header("location:Classes/Tanent/tanentDashboard.php");
					}
					elseif ($single_user_data['userType']=='security') {
						header("location:Classes/Security/securityDashboard.php");
					}
					elseif ($single_user_data['userType']=='flatOwner') {
						header("location:Classes/FlatOwner/flatOwnerDashboard.php");
					}
					else
					{
						header("location:Classes/User/user.php");
					}


					


				}else{

					return "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'> Wrong Password !</p>";


				}

			}else {
				return "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'> Wrong email address !</p>";
			}

		}

		public function userUpdate($name, $email, $pass_hash)
		{	
			$sql = "Update user (name, email, pass,userType, status) VALUES ('$name','$email','$pass_hash','Normal','active')";
			$data = $this -> connection() -> query($sql);
	
			if($data){
				return true;
			}else{
			return false;
			}
		}


}




?>