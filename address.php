<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
      <meta charset="UTF-8">
      <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/templatemo.css">
        <link rel="stylesheet" href="assets/css/custom.css">

        <!-- Load fonts style after rendering the layout styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">

        <!-- Slick -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
   </head>
	<!-- Header -->
		<?php include("header.php") ?>
    <!-- Close Header -->

<body>
    <div class="container mt-5 mb-5 ">
    <h3>Settings</h3>
    <div class="row">
            <div class="col-4">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col"><a class="customer_personal_settings" href="profile.php"><i class="fa fa-fw fa-user text-dark mr-3"></i>&nbsp;&nbsp;&nbsp;<strong>Profile</strong></a></th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th scope="col"><a class="customer_personal_settings" href="address.php"><i class="fa fa-fw fa-address-book text-dark mr-3"></i>&nbsp;&nbsp;&nbsp;<strong>Address</strong></a></th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th scope="col"><a class="customer_personal_settings" href="change_password.php"><i class="fa fa-fw fa-lock text-dark mr-3"></i>&nbsp;&nbsp;&nbsp;<strong>Change Password</strong></a></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-8">
            <form>
				<div class="form-row">
					<div class="form-group">
						<label><strong>Address Line 1</strong></label>
						<br>
						<input type="text" class="form-control input-lg">
					</div>
					<br>
					<div class="form-group">
						<label><strong>Address Line 2</strong></label>
						<br>
						<input type="text" class="form-control input-lg">
					</div>
                    <br>
                    <div class="form-group">
						<label><strong>Contact Number</strong></label>
						<br>
						<input type="text" class="form-control input-lg">
					</div>
                    <br>
                    <div class="form-group">
						<label><strong>State</strong></label>
						<br>
						<select class="form-select" aria-label="Default select example">
                            <option selected>Select State</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
					</div>
                    <br>
                    <div class="form-group">
						<label><strong>Postcode</strong></label>
						<br>
						<input type="text" class="form-control input-lg">
					</div>
                    <br>
                    <div class="form-group">
						<label><strong>City</strong></label>
						<br>
						<input type="text" class="form-control input-lg">
					</div>
				</div>
				<br>
				<div>
					<button type="submit" class="btn btn-outline-dark">Save</button>
				</div>
			</form>
            </div>
        </div>
    </div>
</body>
	<!--Footer-->
		<?php include("footer.php") ?>
	<!--Close Footer-->
</html>
