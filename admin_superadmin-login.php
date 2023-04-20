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

	<div class="forms">
		<div class="form-content">
			<div class="login-form">
			  <div class="title">Admin Login</div>
			  <form autocomplete="off">
				<div class="input-boxes">
				  <div class="input-box">
					<i class="fas fa-user"></i>
					<input type="text" placeholder="Enter your Admin Id" required>
				  </div>
				  <div class="input-box">
					<i class="fas fa-lock"></i>
					<input type="password" placeholder="Enter your password" required>
				  </div>
				  <div class="text text-color"><a href="admin-forget-password.php">Forgot password?</a></div>
				  <div class="button input-box">
				 	 <button type="button" class="btn btn-dark">Dark</button>
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
</html>
