<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
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
          <img src="images/logo3.png">
        </div>
        <div class="back">
          <img class="backImg" src="images/logo3.png" alt="">
        </div>
	</div>
<?php
	
	session_start();
	include("session_connect.php");

	$error = "";
	if(isset($_GET["sendbtn"]))
	{
		if(empty($_GET["admin_id"]) && empty($_GET["admin_password"])) //no enter anythings in form
		{
			$error = "Please fill in ID and Password";
		}
		else if(empty($_GET["admin_id"]))
		{
			$error = "Please fill in ID";
		}
		else if( empty($_GET["admin_password"]))
		{
			$error = "Please fill in Password";
		}
		else
		{
			$id = $_GET["admin_id"];
			$pass = $_GET["admin_password"];
			
			$id = mysqli_real_escape_string($connect,$id);
			$pass = mysqli_real_escape_string($connect,$pass); 
			//escape those special character
			
			$result = mysqli_query($connect,"SELECT * FROM admin WHERE admin_id='$id' AND admin_password='$pass'");
			
			$count = mysqli_num_rows($result);
			
			if($count == 1)
			{
				$row = mysqli_fetch_assoc($result);
				if($id!=$row['admin_id'])
				{
					if($pass != $row['admin_password'])
					{
						$error="*Invalid Password";
					}
					$error="*Invalid ID";
				}
				else if($pass != $row['admin_password'])
				{
					if($id != $row['admin_id'])
					{
						$error="*Invalid ID";
					}
					$error="*Invalid Password";
				}
				else
				{
				$_SESSION["id"] = $row["admin_id"]; 
			?>
			<script>
				alert("Login Successfully.");
				</script>

<?php
				header("refresh:0.1; url=admin_index.php");
			}
		}
			else
			{
				$error = "ID or Password are invalid.";
			}
		}
	}

?>
	<div class="forms">
		<div class="form-content">
			<div class="login-form">
			  <div class="title">Admin Login</div>
			  <form autocomplete="off">
				<div class="input-boxes">
				  <div class="input-box">
					<i class="fas fa-user"></i>
					<input type="text" name="admin_id" placeholder="Enter your Admin Id" required>
				  </div>
				  <div class="input-box">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Enter your password" name="admin_password"required>
				  </div>
				  <div class="text text-color"><a href="admin-forget-password.php">Forgot password?</a></div>
				  <div class="button input-box">
				  	<button class="btn btn-primary btn-lg btn-block btn-dark" name="sendbtn" type="submit">Login</button>
				  </div>
				  <div class="text sign-up-text">You are a superadmin user?<label for="flip"><strong>&nbsp;Superadmin</strong></label></div>
				</div>
			  </form>
			</div>
		  
			<div class="signup-form">
				<div class="title">Superadmin Login</div>
				<form action="#">
					<div class="input-boxes">
					  <div class="input-box">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="Enter your Superadmin Id" required>
					  </div>
					  <div class="input-box">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Enter your password" required>
					  </div>
					  <div class="text text-color"><a href="admin-forget-password.php">Forgot password?</a></div>
					  <div class="button input-box">
						<input type="submit" value="Sumbit">
					  </div>
					  <div class="text sign-up-text">You are an admin user?<label for="flip"><strong>&nbsp;Admin</strong></label></div>
					</div>
				</form>
			</div>
		</div>
    </div>
  </div>
</body>
<?php
mysqli_close($connect);
?>
</html>
