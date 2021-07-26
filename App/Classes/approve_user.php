<?php  include_once "../../App/Classes/autoload.php"; ?>
<?php  
  
  $conn = new User;

 	if( isset($_GET['email'])){
	$receved=$_GET['email'];

	 $sql="SELECT * FROM user WHERE email='$receved'";

     $data = $conn -> connection() ->  query($sql);
     $single_data = $data -> fetch_assoc();
     if($single_data['Status']=='active')
     {
     	$sql1="UPDATE user SET Status='inactive' WHERE email='$receved'";
        $data1 = $conn -> connection() ->  query($sql1);

     }
     else{
     $sql1="UPDATE user SET Status='active' WHERE email='$receved'";
     $data1 = $conn -> connection() ->  query($sql1);
 	}
}
  header("location:../../Classes/Admin/adminDashboardUser.php?user=inactive")

?>