<?php  include_once "App/Classes/autoload.php"; ?>
<?php  
  
  $user = new User;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <link rel="stylesheet" href="assets/css/createAccount.css">

</head>
<body>  

    <?php  

        if( isset($_POST['user_submit']) ){

          // Get value 
          $name = $_POST['name'];
          $email = $_POST['email'];

          // Password Hash
          $pass = $_POST['pass'];
          $rpass = $_POST['rpass'];
          $pass_hash = password_hash($pass , PASSWORD_DEFAULT);

          // Email check 
          $user_check = $user -> emailCheck($email);

          // Password check 
          if( $pass !== $rpass){
            $pass_check = false;
          }else {
            $pass_check = true;
          }

          if( empty($name) || empty($email) || empty($pass) )
        {
              $mess = "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'>All fields are required !</p>";
          }elseif($pass_check == false){
              $mess = "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'>Password not match !</p>";
          }elseif( filter_var($email, FILTER_VALIDATE_EMAIL ) == false ){
              $mess = "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'>Invalid Email !</p>";
          }elseif( $user_check == false ){
              $mess = "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'>Email already exixts !</p>";
          }else {


              $data = $user -> userRegistraion($name, $email, $pass_hash);
              if(  $data  == true ){
                $mess = "<p style='color:green;text-align:center; font-size:14px; font-weight:normal;'> Registration successfull </p>";
              }
         }



       }

    ?>
  z
    <div class="registration">
       <p>Create an Account</p>
       <?php  

          if (isset($mess)) {
            echo $mess;
          }

       ?>
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

              <div class="input-field">
                <input name="name" class="textfield" type="text" placeholder="Name">
                <?php //if( isset($mess['name']) ) { echo $mess['name']; } ?>
              </div>
              <div class="input-field">
                <input name="email" class="textfield" type="text" placeholder="Email">
              </div>
              <div class="input-field">
                <input name="pass" class="textfield" type="password" placeholder="Password">
              </div>
              <div class="input-field">
                <input name="rpass" class="textfield" type="password" placeholder="Re-Password">
              </div>
              <div class="input-field">
                <input name="user_submit" class="signup-btn" type="submit" value="Sign Up">
              </div>
              
              <a href="login.php">Already have one?</a>
          </div>

       </form>
        
    </div>  
  
</body>
</html> 
