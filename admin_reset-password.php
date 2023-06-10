<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
		session_start();
		include("session_connect.php");
?>	
  <head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="assets/admin_styles/admin_style.css">
	<link rel="stylesheet" href="assets/admin_styles/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
        <div class="front">
          <img src="images/admin_login_logo.png">
        </div>
	</div>

	<div class="forms">
		<div class="form-content">
			<div class="login-form">
			  <div class="title">Reset Password</div>
			  <form method="post" autocomplete="off">
				<div class="input-boxes">
				  <div class="input-box">
					<i class="fas fa-lock"></i>
					<input class="form-control" type="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required> 
				  </div>
                  <p style="color:red;">*Password should consist of a mixture of numbers and both uppercase and lowercase letters with at least 14 characters </p></div>

                  <div class="input-box">
					<i class="fas fa-lock"></i>
					<input class="form-control" type="password" placeholder="Comfirmation Password" name="con_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required> 
				  </div>
				  <div class="button input-box">
					<button class="btn btn-primary btn-block btn-dark" type="submit" name="resetbtn">Reset Password</button>
				  </div>
				</div>
            </form>
            <?php 
	
    if(isset($_POST["resetbtn"]))
    {
    
        $newpass=$_POST["password"];
        $conpass=$_POST["con_password"];
        $email=$_SESSION["email"];
    
        if($newpass != $conpass)
        {
            ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>swal({title:"Failed To Reset Password",
                                    icon:"error",
                                    text:"Not matching password. Please try again" ,
                                    button:"Ok"}); </script>
    
    
           <?php
        }
        else
        {
        $result=mysqli_query($connect,"UPDATE admin SET admin_password='$newpass'
                                                        WHERE admin_email='$email'; ");
    
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>swal({title:"Password Changed!",
                    icon:"success",
                    text:"You Have Change Your Password Successfully",
                    button:"Back To Login"}	).then(function(){window.location.href="admin_superadmin-login.php";}); </script>
    <?php
        }
    }
    
    ?>
    
			</div>
		</div>
    </div>
  </div>
</body>
</html>