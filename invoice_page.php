<?php
include("session_connect.php");
session_start();
$payment_method= $_SESSION['payment_method'];
$cusid=$_SESSION["id"];
$order_date=date("Y-m-d");
?>
<!DOCTYPE HTML>
<html>
<head>
		<title>Invoice</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		<link rel="stylesheet" href="assets/css/invoice_page.css">

<style>
@media print { 
	#print_btn{
		display: none;
	}
}
</style>

</head>

<body style="background-color:#eff0f5;">
	<div id="invoice">
		<div id="container">
			<div id="first_row">
				<div id="logo">
					<img src="images/logo.png" id="logo "width="160px" height="90px">
				</div>
				<div style="display: flex;justify-content: center;align-items: center;">
					<p id="title">Invoice</p>
				</div>
			</div>
			<div id="sec_row">
				<div class="row">
					<div class="col-md-8">
						<div >
							<p style="font-weight:900;">Sparta Sports Apparel Sdn.Bhd</p>
							<p>Multimedia University,<br>Jalan Ayer Keroh Lama,<br> 75450 Bukit Beruang, Melaka,<br> Malaysia</p>
						</div>
					</div>
					<div class="col-md-4">
						<span>Invoice Date: <?php echo $order_date; ?></span>
						<br>
						<span>Payment Type: <?php echo $payment_method; ?></span>
					</div>
				</div>
			</div>
			
			<div id="third_row">
				<div class="row">
					<div class="col-md-12">
						<?php
							$result = mysqli_query($connect, "SELECT * from customer_address WHERE customer_id='$cusid'");
							while($row = mysqli_fetch_assoc($result))
							{
						?>
						<div>
							<p style="font-weight:900;">Billing Address</p>
							<p><?php echo $row["delivery_address_line1"]; ?><br> <?php echo $row["delivery_address_line2"]; ?>,<br> <?php echo $row["postcode"]; ?> <?php echo $row["city"]; ?>, <?php echo $row["state"]; ?></p>
						</div>
						<?php 
							}
						?>
					</div>

				</div>
			</div>
			<div id="fourth_row">
			<label style="font-size:20px; font-weight:900;"> Order Information</label>
			<br>
			<br>
			<form method="post">
				<table class="table">
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
				<div class="row justify-content-end" style="padding:10px;">
					<div class="col-md-3">
						<p style="font-weight:700;">Total</p>
					</div>
					<div class="col-md-3">
						<span><p>RM <?php echo number_format((float)$grand, 2, '.', '') ?></p></span>
					</div>
				</div>
				<div id="btn_container">
					<button name="purchase" style="margin-right:20px;" type="submit" class="btn btn-dark btn-lg">Purchase History</button>
				</div>
			</form>
		</div>
	</div>
</body>
<?php
	 if(isset($_POST["purchase"]) )
	 {
		$payment_method= "Debit/Credit Card";
		$order_date=date("Y-m-d");
		$status_order="Paid Out";
		$payment_type=mysqli_query($connect,"INSERT INTO payment(payment_type,grandtotal) VALUES ('$payment_method','$grand')");
		$update_order=mysqli_query($connect,"INSERT INTO customer_order (customer_id,order_status,payment_id,order_date) VALUES ('$cusid','$status_order',LAST_INSERT_ID(),'$order_date')");
		$update_cart=mysqli_query($connect,"UPDATE cart SET payment_status=LAST_INSERT_ID() WHERE customer_id='$cusid' AND payment_status=0");
		if($payment_type && $update_order && $update_cart)
		{
		?>
		<script>
		window.location.href="purchase_history.php"
		</script>
<?php
		}
	 }
?>
</html>