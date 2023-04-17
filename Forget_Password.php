<!DOCTYPE HTML>
<html>
	<head>
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
	<style>
	#forget_pass{
		border-style:none;
		background-color:#ffffff;
		box-shadow: 0 10px 10px 0 rgb(0 0 0 / 10%);
		width:70%;
		margin:64px auto;
		padding: 27px 50px 32px;
		box-sizing: border-box;
		
	}
	
	#forget_pass_form input[type="text"] {
	width: 100%;
	height: 50px;
	border: 1px black solid;
	border-radius:4px;
	font-size: 16px;
	padding: 0px 12px;
	box-sizing: border-box;
	
}

#submit_btn{
	padding: 10px 50px;
	text-align:center;
	font-size: 18px;
	border-radius: .3rem;
	border-style: none;
	color: #ffffff;
	background-color: #59AB6E;	
}

	#title{
	    font-family: 'Roboto', sans-serif;
		font-size: 2.5rem;
	}
	
	#msg{
		font-family: 'Roboto', sans-serif;
		font-size: 18px !important;
	}
	</style>
	</head>
	<body style="background-color:#eff0f5;">
		<div>
			<form id="forget_pass_form">
			<div id="forget_pass">
				<div id="container">
					<div id="title_container">
					<p id="title">Forget Password </p>
					</div>
					
						<div>
							<label id="msg"> Please enter your email address. We will send reset password link into your email.</label>
							<br>
							<br>
							<div>
							<input type="text" id="email_address" placeholder="Email">
							</div>
						</div>
					<div style="display: flex; width:45%;margin:auto; padding-top:5%; justify-content: center;">
						<input type="button" value="Submit" id="submit_btn"></input>
					</div>
					
				</div>
			</div>
			</form>
		</div>
	</body>
</html>
