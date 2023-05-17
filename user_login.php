<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
	<title>Zay Shop - Product Detail Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
<body>

<!-- Header -->
	<?php include("header.php") ?>
<!-- Close Header -->
	
	

<!--start-ckeckout-->
	<div class="ckeckout">
		<div class="container">
			<div class="ckeckout-top">
				<iframe src="iframe_login.php" style="position:absolute;top:245px; left:30;right:90; bottom:100;width:1500px;height:470px;border:none; margin:0; padding:0;z-index:1" id="my-iframe""></iframe>
				<table style="color:white;user-select:none;z-index:-2;">
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
					<tr>
						<td>1</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
				
				<script>
					var myIframe = document.getElementById('my-iframe');
					myIframe.contentWindow.document.addEventListener('submit',function(){window.parent.location.href='index.php'});
				</script>
				
	<!--end-ckeckout-->

	<!--Footer-->
	<?php include("footer.php") ?>
	<!--Close Footer-->

</body>
</html>
