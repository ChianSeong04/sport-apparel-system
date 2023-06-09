<?php
include("session_connect.php"); 
session_start(); 
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="assets/img/apple-icon.png">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/templatemo.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<!-- Load fonts style after rendering the layout styles -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
	<link rel="stylesheet" href="assets/css/fontawesome.min.css">
	<!-- Sweet Alert 2-->
	<link rel="stylesheet" href="package/dist/sweetalert2.min.css">
	<script src="package/dist/sweetalert2.all.min.js"></script>
	</head>

	<!-- Header -->
	<?php include("header.php") ?>
	<!-- Close Header -->
	
	<body>
	<?php
	$error="";
		if(isset($_POST["sendbtn"])){
			if(empty($_POST["useremail"]) || empty($_POST["userpass"])){
					$error="User Email or Password is Empty";
			}
			else{
				$email=$_POST["useremail"];
				$pass=$_POST["userpass"];
				$email=mysqli_real_escape_string($connect,$email);
				$pass=mysqli_real_escape_string($connect,$pass);
				//escape special characters

				$mail=mysqli_query($connect,"SELECT * FROM customer WHERE customer_email='$email'");
				$result=mysqli_query($connect,"SELECT * FROM customer WHERE customer_email='$email' AND customer_password='$pass'");

				//$count=mysqli_num_rows($result);

				if(mysqli_num_rows($mail) != 1){
					$error="Please Register! You Email Has Not Register Yet!";
				}else if(mysqli_num_rows($result) == 0){
					$error="You Have Enter A Wrong Password. Please Try Again!";
				}
				else{
					$row=mysqli_fetch_assoc($result);

					if($email != $row["customer_email"]){
						$error="Invalid Email. Please Try Again";
					}else if($pass != $row["customer_password"]){
						$error="Invalid Password. Please Try Again";
					}else{
						$_SESSION["id"]=$row["customer_id"];
				?>
					<script>
						Swal.fire({
						icon: 'success',
						title: 'Login Successfully',
						showConfirmButton: true,
						confirmButtonText: 'OK'
						}).then((result) => {
						if (result.isConfirmed) {
							window.location.replace("index.php");
						}
						})
					</script>
				<?php
					}
					
				}
			}
			
		}
	?>
	<div class="container mt-5 mb-5 ">
		<div class="row">
			<div class="col-6">
				<h2>LOGIN</h2>
				<form method="post" autocomplete="off">
					<div class="form-row">
						<div class="form-group">
							<label><strong>Email Address*</strong></label>
							<br>
							<input type="email" name="useremail" class="form-control input-lg" id="inputEmail4" placeholder="Email" value="<?php echo isset($_POST["useremail"]) ? $_POST["useremail"] : ''; ?>" required>
						</div>
						<br>
						<div class="form-group">
							<label><strong>Password*</strong></label>
							<br>
							<input type="password" name="userpass" class="form-control" id="inputPassword4" placeholder="Password" value="<?php if(isset($_POST['userpass'])) { echo $_POST['userpass']; } ?>" required>
							<span style="color:red;"><?php echo $error ?> </span>
						</div>
					</div>
					<br>
					<div>
						<p><a class="forgot_password" href="forget_password.php">Forgot Your Password?</a></p>
						<button type="submit" name="sendbtn" class="btn btn-outline-dark" >LOGIN</button>
						<p class="mt-2">Not a member? <a class="register_link" href="register.php"><strong>Join Us</strong></a></p>
					</div>
				</form>
			</div>
			<div class="col-6">
				<img class="login_image rounded" src="images/login_image.jpg">
			</div>
		</div>
	</div>

	</body>
	<?php include("footer.php") ?>
</html>
