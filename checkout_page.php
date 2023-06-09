<?php
include("session_connect.php");
session_start();
$cusid=$_SESSION["id"];
?>
<!DOCTYPE HTML>

<html>
<head>
	<title>Checkout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

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


</head>
	<body>
	<?php
		$error_name="";
		$error_number="";
		$error_month="";
		$error_year="";
		$error_cvv="";
		$name_check=0;
		$card_checking=0;
		$month_check=0;
		$year_check=0;
		$cvv_check=0;
		$total=0;
	if(isset($_POST["pay"]) )
	{
		
		$name=$_POST["cardname"];
		$number=$_POST["cardnumber"];
		$month=$_POST["expmonth"];
		$year=$_POST["expyear"];
		$cvv=$_POST["cvv"];
		//Use to check all the input hit the requirement or not 
		
		$card_no="/^[4-5]\d{12}(\d{3})?$/";
		$visa="/^4\d{12}(\d{3})?$/";
		$master="/^5\d{12}(\d{3})?$/";
		$card_type="";
		if (!preg_match ("/^[a-z A-z]*$/", $name) ) //credit card name
		{  
			$error_name = "*Only alphabets allowed.";  
				
		} 
		else
		{
		$name_check=1;
			$error_name="";
		
		}
		
		if(!preg_match($card_no,$number)) //credit card number
				{
					$error_number="*Please enter a valid number";
				}
		else if(preg_match($visa,$number))
		{
			$card_type="Visa";
			$card_checking=1;
		}
		else if(preg_match($master,$number))
		{
			$card_checking=1;
			$card_type="Master";
		}
		else
		{
			$card_checking=1;
			$error_number="";
			
		}
		
		
		$cvv_number = strlen($cvv);
		if($cvv_number<3)
		{
			$error_cvv = "*Please enter 3 number";  
		}
		else
		{
		$cvv_check=1;
			$error_cvv="";
			
		}
		
		$cur_month=date('M Y');
		if (preg_match ("/^[a-zA-z]*$/", $month) ||  !ctype_digit($month)) //month
		{  
		$error_month = "*Only number are allowed.";  
			
		} 
		else if($month>12 || $month<1)
		{
		$error_month = "*Please enter valid month";
		}
		else
		{
		$month_check=1;
		$error_month="";
		
		}
		
		$min="/(\d{4,})/";
		$curYear = date('Y'); 
		if (preg_match ("/^[a-zA-z]*$/", $year) || !ctype_digit($year) || !preg_match ($min, $year)) //YEAR
		{  
			$error_year = "*Only number are allowed.";  
				
		} 
		else if($curYear>$year)
		{
			$error_year = "*Expired Year."; 
		}
		else
		{
		$year_check=1;
			$error_year="";
		}
		$total=0;
		$total=$month_check+$name_check+$year_check+$cvv_check+$card_checking;
		$_SESSION['carname'] = $card_type;
		$_SESSION['payment_method'] = "Debit/Credit Card";
	}
?>
		<?php include("header.php") ?>
		<div id="checkout_cont" >
			<form id="checkout_form" method="post" autocomplete="off">
				<div id="container pd-4">					
						<div class="row gx-3">
							<div class="col-md-7">
								<div id="left-container" class="p-3">																		
									<h4>Order Summary</h4>
									<div class="row" id="address_container">
										<div class="col-md-12 p-3" style="overflow:hidden;">

										</div>
									</div>
									<br>
									<table class="table table-borderless">
										<thead>
											<tr>
												<th scope="col"></th>
												<th scope="col">Product Name</th>
												<th scope="col">Product Quantity</th>
												<th scope="col">Product Price</th>
												<th scope="col">Product Subtotal</th>
											</tr>
										</thead>
										<?php
											$grand=0;
											$lol=$_SESSION["id"];
																						
											$result = mysqli_query($connect, "SELECT * FROM cart 
											JOIN customer ON cart.customer_id = customer.customer_id 
											JOIN product ON cart.product_id = product.product_id 
											JOIN product_detail ON product.product_detail_id = product_detail.product_detail_id 
											JOIN product_color ON product_color.product_color_id = product.product_color_id 
											JOIN product_size ON product_size.product_size_id = product.product_size_id WHERE cart.customer_id='$lol' AND cart.payment_status=0");
											
											$nop=mysqli_num_rows($result);
											while($row = mysqli_fetch_assoc($result))
											{
												$subtotal= $row['product_price'] * $row['product_quantity'] ;
											?>
										<tbody>
											<tr>
												<td class="align-middle"><?php echo '<img src="images/'.$row['product_image'].'" height="120px" width="120px">';?></td>
												<td class="align-middle"><?php echo $row['product_name']; ?><span style="font-size:14px; color:grey;"><br>Variation: (<?php echo $row['product_color']; ?>,<?php echo $row['product_size']; ?>)</span></td>
												<td class="align-middle"><?php echo $row['product_quantity']; ?></td>
												<td class="align-middle">RM <?php echo $row['product_price']; ?></td>
												<td class="align-middle">RM <span id="subtotal-<?php echo $row['cart_id'] ?>"> <?php echo number_format("$subtotal",2); ?></span></td>
											</tr>
										</tbody>
										<?php
											$grand+=$subtotal;
										}
										?>
									</table>
								</div>
							</div>
							<div class="col-md-5">
								<div id="right-container" class="p-3">
									<div>
										<?php 
											$customer_shipping = mysqli_query($connect, "SELECT * FROM customer_address WHERE customer_id ='$lol' ");
											while($row12 = mysqli_fetch_assoc($customer_shipping))
											{
										?>
										<h4>Shipping Address</h4>
										<div class="row p-3">
											<div class="col-md-6">
												<label>Contact Number</label>
												<input type="text" value="<?php echo $row12['contact_number']; ?>" readonly></p>
											</div>
											<div class="col-md-6">
												<label>Contact Number</label>
												<input type="text" value="<?php echo $row12['contact_number']; ?>" readonly></p>
											</div>
											<div class="col-md-6">
												<label>Address Line 1</label>
												<input type="text" value="<?php echo $row12['delivery_address_line1']; ?>" readonly></p>
											</div>
											<div class="col-md-6">
												<label>Address Line 2</label>
												<input type="text" value="<?php echo $row12['delivery_address_line2']; ?>" readonly></p>
											</div>
											<div class="col-md-6">
												<label>City</label>
												<input type="text" value="<?php echo $row12['city']; ?>" readonly></p>
											</div>
											
											<div class="col-md-6">
												<label>State</label>
												<input  type="text" value="<?php echo $row12['postcode']; ?>" readonly></p>
											</div>
										</div>
										<?php
											}
										?>
									</div>
									<hr>
										<h4>Payment</h4>
											<div class="row p-3" id="credit_card_input_field">
												<div class="col-md-12">
													<label> Name On Card </label>
													<input type="text" id="name_on_card" name="cardname" placeholder="Name on card"required>
													<span style="color:red;"><?php echo $error_name; ?></span></p>
												</div>

												<div class="col-md-12">
													<label> Card Number </label>
													<input type="text" id="ccnum" name="cardnumber" placeholder="####-####-####-#####" 
													style="margin-bottom:00px;" maxlength="16" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
													<span style="color:red;"><?php echo $error_number; ?></span></p>
												</div>

												<div class="col-md-6">
													<label> Expired Month </label>
													<input type="text" id="expmonth" name="expmonth" placeholder="11" 
													maxlength="2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
													<span style="color:red;"><?php echo $error_month; ?></span></p>										
												</div>

												<div class="col-md-6">
													<label> Expired Year </label>
													<input type="text" id="expyear" name="expyear" placeholder="2022"
													maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>	
													<span style="color:red;"><?php echo $error_year; ?></span></p>									
												</div>

												<div class="col-md-12">
													<label> CVV </label>
													<input type="text" id="cvv" name="cvv" placeholder="222"  maxlength="3" 
													oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
													<span style="color:red;"><?php echo $error_cvv; ?></span></p>
												</div>
											</div>
										<hr>
										<div style="margin: 10px 0px;">
											<h4>Grandtotal</h4>
											<div class="row">
												<div class="col-md-8">
													<p>Total (<?php echo $nop; ?> Items)</p>
												</div>
												<div class="col-md-4">
													<p>RM <?php echo $grand; ?></p>
												</div>
											</div>
											<div style="display: grid;">
												<button type="submit" style="margin:auto;" class="btn btn-dark mb-3" id="pay_btn" name="pay">Place Order</button>
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
<?php
	if($total==5)
		{
			
			$cart = mysqli_query($connect, "SELECT * FROM cart 
				JOIN customer ON cart.customer_id = customer.customer_id 
				JOIN product ON cart.product_id = product.product_id 
				JOIN product_detail ON product.product_detail_id = product_detail.product_detail_id 
				JOIN product_color ON product_color.product_color_id = product.product_color_id 
				JOIN product_size ON product_size.product_size_id = product.product_size_id WHERE cart.customer_id='$cusid' AND payment_status = 0");
		while($table = mysqli_fetch_assoc($cart))
		{
			$product_subtotal=$table['cart_subtotal'];
			$product_id=$table['product_id'];
			$product_quantity=$table['product_quantity'];
			$updatestock=mysqli_query($connect,"UPDATE product SET product_stock = product_stock - '$product_quantity' WHERE product_id = '$product_id'");
		}
			?>
	<script>
		Swal.fire({
		icon: 'success',
		title: 'Pay Successfully',
		showConfirmButton: true,
		confirmButtonText: 'OK'
		}).then((result) => {
		if (result.isConfirmed) {
			window.location.replace("invoice_page.php");
		}
		})
	</script>
			<?php
		}
?>
</html>