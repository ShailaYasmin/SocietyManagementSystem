<?php  include_once "../../App/Classes/autoload.php"; ?>
<?php  
  
  $conn = new User;

 	if( isset($_GET['email'])){
	$receved=$_GET['email'];
	$type=$_GET['userType'];
  
  $sql="DELETE FROM user WHERE email='$receved'";

  $data = $conn -> connection() ->  query($sql);
}
  header("location:../../Classes/Admin/adminDashboardUser.php?user=all")

?>