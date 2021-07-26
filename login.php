<?php  include_once "App/Classes/autoload.php"; ?>
<?php  
  
  $user = new User;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Society Management System</title>
  <link rel="stylesheet" type="text/css" href="assets/css/stylelogin.css">

<body>


    <?php  

        if( isset($_POST['user_login']) ){

          // Get value 
          $email = $_POST['email'];
          $pass = $_POST['pass'];

          // Email check 
          //$email_check = $user -> emailCheck($email);
        

          if( filter_var($email, FILTER_VALIDATE_EMAIL ) == false ){
              $mess = "<p style='color:red;text-align:center; font-size:14px; font-weight:normal;'>Invalid Email !</p>";
          }else {

             $mess = $user -> userLoginSystem($email, $pass);

          }

        }

    ?>

     <img src ="assets/image/loginBackground.jpg"class="log">
    <div class="loginbox">
        <img src="assets/image/login1.png" class="LogIn1">

        <h1>Login Here</h1>
        <h3></h3>
        <?php  
          if( isset($mess) ){
            echo $mess;
         }
        ?>
    
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <p> Email </p>
          <input id="uname" name="email" type="text"  placeholder="Enter Username">
         <p> Password</p>
          <input id="password" name="pass" type="password"  placeholder="Enter Password"><br>
          <input id="log" name="user_login" type="submit"  value="Login">
          <!-- <a href="#">Lost your password?</a><br> -->
          <a href="createAccount.php">Don't have an acoount?</a>
        </form> 
    </div>

    <script type="assets/js/jquery-3.4.1.min.js"></script>
    <script>
      $('.loginbox #log').click(function(){
        let name=$('.loginbox #uname').val();
        let pass=$('.loginbox #pass').val();

        if(name == ''  || pass == ''){

            $('.loginbox h3').html('<span stylr="color:red;">Filled must not be empty</span>');
        }
        else{
          $('.loginbox h3').html('<span stylr="color:green;">All right</span>');
        }

      })

    </script>
  
</body>
</head>
</html>