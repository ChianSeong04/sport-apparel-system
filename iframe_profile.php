<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
input[type="submit"] {
	background: RGB(255, 106, 89);
	color: #FFF;
	font-size: 1em;
	padding: 0.5em 1.2em;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	display: inline-block;
	text-transform: uppercase;
	border: none;
	outline: none;
	margin-left: 10px;
	width: 50%;
	height: 50px;
}

input[type="submit"]:hover {
	background:#cb0000;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
}

input{
	display:block;
}

#wrapper
{
	width:900px;
	border:2px solid RGB(255, 106, 89);;
	overflow:auto;
}

#left
{
	float:left;
	width:200px;
	padding:15px;
}


#right
{
	float:left;
	padding:5px;	
	border-left:2px solid RGB(255, 106, 89);;
	width:150px;
}

.content{
	float:left;
	padding:5px;
	width:450px;
}

label
{
	display:inline-block;
	width:100px;
	vertical-align:top;
	
}
	</style>

</head>

<body>
<!--start-profile-->
	<div class="container">

	<h3> My Account </h3>
	
	<div id="wrapper">

	<div id="left">
		<h4><a href='iframe_profile.php'>My Profile </a> </h4>
		<h4><a href='iframe_address.php'>My Address </a> </h4>
		<h4><a href='iframe_changepassword.php'>Change Password </a> </h4>

	</div>
	
	<div id="right">

		<form name="editfrm" method="post" action="" autocomplete="off">

			<p style="margin-top:15px;">First Name </p>
		 
			<p style="padding-top:5px;">Last Name </p>
			
			<p style="padding-top:5px;">Email </p>

			<p style="padding-top:5px;">Handphone No. </p>
			
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p style="color:white;"><?php echo $space ?></p>

			
			</div>
			<div class="content">
			<p style="margin-top:10px;"><input type="text" name="cusfn" size="50" value="Kenny" required> </p>
			<p><input type="text" name="cusln" size="50" value="Shabi" required> </p>
			<p><input type="text"  name="cusemail" size="50" style="background-color:#E5E4E2;"  value="kennyshabi@gmail.com" readonly> </p>
			<p><input type="text" name="cushp" size="50" value="01234567891" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="11" pattern="0.+" required><span style="color:black;font-family:'Lato',sans-serif;">*Only number available</span> <br> <span style="color:red;"></span></p>
			
			<p><input type="submit" name="editbtn" value="SAVE" > 
</div>
		</form>

	
	
</div>

</div>
	<!--end-profile-->

</body>
</html>