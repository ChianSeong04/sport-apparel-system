<!DOCTYPE HTML>
<html>
<head>
	<title>Checkout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/checkout_page.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
    window.addEventListener("DOMContentLoaded", function() {
		$("#credit_card_input_field").hide();
		$("input[type=radio][name=payment_type]").change(function(){
			selected_value = $("input[name='payment_type']:checked").val();
			if(selected_value=="creditcard"){
				$("#credit_card_input_field").show();
				 
			} else{
				 $("#credit_card_input_field").hide();
			}
		});
		
	});
</script>
</head>
	<body>
		<?php include("header.php") ?>
		<div id="checkout_cont">
			<form id="checkout_form">
				<div id="container pd-4">					
						<div class="row gx-3">
							<div class="col-md-7">
								<div id="left-container" class="p-3">																		
									<h5 id="address_title"> Shipping Address</h5>
									<div class="row" id="address_container">
										<div class="col-md-12 p-3" style="overflow:hidden;">
											<select name="address" id="addess_selection">
													<option value="1">1</option>
											</select>
										</div>
									</div>
									<div class="p-3">
									<div class="row">
										<div class="col-md-8">
											<h5 id="item"> Item</h5>
										</div>
										<div class="col-md-2">
											<h5 id="unit_price"> Unit Price</h5>
										</div>
										<div class="col-md-2">
											<h5 id="total_prod_price"> Total Price</h5>
										</div>
										
									</div>
										<div class="row">	
											<div class="col-md-2">
												<img src="assets/img/category_img_01.jpg" width="80px" height="80px">
											</div>
											
											<div class="col-md-6">
												<span id="prod_title"><p>Casio Watch</p>
												<span id="qty"><p>x 2 </p></span>
											</div>
											
											<div class="col-md-2">
													<span>RM 150</span>
											</div>
																					
											<div class="col-md-2">
												<span>RM 300</span>
											</div>									
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div id="right-container" class="p-3">
									<div id="payment_container">
										<h4>Payment Method</h4>  
										<br>  
										<input type="radio" id="creditcard_selection" class="creditcard_selection" name="payment_type" value="creditcard"/> Credit Card    
										<br>  
										<input type="radio" id="cod_selection" class="cod_selection" name="payment_type" value="cod"/> COD <br/> 
									</div>
									
									<div class="row p-3" id="credit_card_input_field">
									<div class="col-md-12">
										<label> Card Number </label>
										<input type="text" id="card_num" name="cardnumber" placeholder="####-####-####-####"
											pattern="^\d{4}-\d{4}-\d{4}-\d{4}$" required></p>
									</div>
									<div class="col-md-12">
										<label> Name On Card </label>
										<input type="text" id="name_on_card" name="name_on_card" placeholder="Name on card"required></p>
									</div>
									<div class="col-md-6">
										<label> Expiration (MM/YY) </label>
										<input type="text" id="expiration" name="expiration" placeholder="MM/YY" maxlength="5" pattern="^\d{2}/\d{2}$" required></p>
									</div>
									
									<div class="col-md-6">
										<label> CVV </label>
										<input id="cvv" name="cvv" maxlength="3" type="text" pattern="[0-9]{3}" required></p>
									</div>
									
									</div>
									<div style="margin: 10px 0px;">
										<h4>Order Summary</h4>
										<div class="row">
											<div class="col-md-8">
												<p>Total (1 Items)</p>
											</div>
											<div class="col-md-4">
												<p>RM 300</p>
											</div>
										</div>
										<div style="display: grid;">
											<input type="button" value="Place Order" id="order_btn" style="margin:auto;">
										</div>
										
									</div>
								</div>
							</div>
						</div>
				</div>
			</form>
		</div>		
<?php include("footer.php") ?>
</body>
</html>
