<?php
include("session_connect.php");
session_start();
?>

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
	<!--Sweet Alert Package-->
	<script src="package/dist/sweetalert2.all.min.js"></script>
	<script src="package/dist/sweetalert2.min.js"></script>
	
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

	<link rel="stylesheet" href="assets/css/invoice_page.css">

</head>
	<body>
		<?php
		if(!isset($_SESSION["id"]))
		{
			?>
			<script>
				Swal.fire({
					title:"Please Login First!",
					text:"You are unable to proceed as a guest",
					icon:"error",
					button:"Ok"}).then(function(){window.location.href="user_login.php";}); 
			</script>
			
			<?php
			exit();
		}
	?>
	
		<?php include("header.php") ?>
		
		<div id="checkout_cont">
			<form id="checkout_form">
				<div id="container pd-4">					
						<div class="row gx-3">
						<!--Left Container-->
							<div class="col-md-7">
								<div id="left-container" class="p-3">																		
									<h5 id="address_title"> Shipping Address
										<?php
										$cusid=$_SESSION["id"];
										$number= mysqli_query($connect, "SELECT * FROM cart where customer_id='$cusid' AND payment_status = 0");	
										$count = 0;
										?>
									</h5>
									<?php
									   
									   $gtt=0;
									   $cart = mysqli_query($connect, "SELECT * FROM cart 
									   JOIN customer ON cart.customer_id = customer.customer_id 
									   JOIN product ON cart.product_id = product.product_id 
									   JOIN product_detail ON product.product_detail_id = product_detail.product_detail_id 
									   JOIN product_color ON product_color.product_color_id = product.product_color_id 
									   JOIN product_size ON product_size.product_size_id = product.product_size_id WHERE cart.customer_id='$cusid' AND payment_status = 0");

										while($table = mysqli_fetch_assoc($cart))
										  {
											
									?>
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
												<?php echo '<img src="images/'.$table['product_image'].'" height="80px" width="80px">';?>
											</div>
											
											<div class="col-md-6">
												<span id="prod_title"><?php echo $table['product_name']; ?></span>
												<p><span id="qty" style="font-size:19px">x<?php echo $table['product_quantity']?></span></p>
											</div>
											
											<div class="col-md-2">
													<span>RM <?php echo $table['product_price']?></span>
											</div>
																					
											<div class="col-md-2">
											<?php $subtotal = $table['product_price']*$table['product_quantity']; ?>
												<span>RM <?php echo $subtotal ?></span>
											</div>	
											<?php $count = $count+ $table['product_quantity']; ?>
										</div>
									</div>
									<?php
											 $total= $table['cart_subtotal'];
											 $gtt=$gtt+$total;
											 $_SESSION['grandtotal']=$gtt;
											  }
											?>
								</div>
							</div>
							<!--Right Container-->
							<div class="col-md-5">
								<div id="right-container" class="p-3">
									<h4>Payment</h4>
									<div class="row p-3" id="credit_card_input_field">
										<div class="col-md-12">
											<label> Card Number </label>
											<input type="text" id="card_num" name="cardnumber" placeholder="####-####-####-####"
												pattern="^\d{4}-\d{4}-\d{4}-\d{4}$" title="Please input correct format" maxlength="19" required></p>
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
												<p>Total (<?php echo "$count"; ?> Items)</p>
											</div>
											
											<div class="col-md-4">
											
												<p>RM <?php echo number_format((float)$gtt, 2, '.', '') ?></p>
											</div>
										</div>
										<div style="display: grid;">
											<input type="button" value="Place Order" id="order_btn" style="margin:auto;" onclick="show_generate_invoice()">
										</div>
										
									</div>
								</div>
							</div>
							<!--End of Right Container-->
						</div>
				</div>
			</form>
			


<!-- Modal -->
		<div class="modal fade" id="modal_generate_invoice" tabindex="-1" aria-labelledby="GenerateInvoiceModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="GenerateInvoiceModalLabel">Generate Invoice</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<p>Thank you for your purchasing ! Do you want to generate invoice ?</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="calcel_btn">Cancel</button>
				<button type="button" class="btn btn-primary" id="generate_invoice">Generate</button>
			  </div>
			</div>
		  </div>
		</div>

		</div>	
		
<?php include("footer.php") ?>

<style>
  input:invalid {
    border: 2px solid red;
  }
</style>

</body>
<script>
    function show_generate_invoice() {
        $("#modal_generate_invoice").modal('show');
    }
	$('#calcel_btn').click(function(){
   window.location.href='index.php';
})
	$('#generate_invoice').click(function(){
   window.location.href='invoice_page.php';
})

</script>
</html>

