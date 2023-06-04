<?php
include("session_connect.php");
session_start();
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
	
	<?php
		$date=date("Y-m-d");
		$cusid=$_SESSION["id"];
		$order_ID=mysqli_query($connect,"Select order_id FROM customer_order WHERE customer_id=$cusid AND order_date='$date'");
		$row1 = mysqli_fetch_assoc($order_ID);
		$orid = $row1['order_id'];
	?>
	
	<div id="invoice">
		<div id="container">
			<div id="first_row">
				<div id="logo">
					<img src="images/logo.png" id="logo "width="160px" height="90px">
				</div>
				<div style="display: flex;justify-content: center;align-items: center;">
					<p id="title">Invoice </p>
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
						<span>Invoice Date: <?php echo $date;?><p></p></span>
						<span>Order Number: SA<?php echo $orid;?><p></p></span>
						<span>Payment Type: Credit Card<p></p></span>
					</div>
				</div>
			</div>
			
			<div id="third_row">
				<div class="row">
					<div class="col-md-12">
						<div >
							<p style="font-weight:900;">Billing Address</p>
							<?php 
								$address = mysqli_query($connect,"SELECT delivery_address_line1,delivery_address_line2,state,postcode,city FROM customer_address WHERE customer_id=$cusid"); 
								$row = mysqli_fetch_assoc($address);
								$da1 = $row['delivery_address_line1'];
								$da2 = $row['delivery_address_line2'];
								$state = $row['state'];
								$postcode = $row['postcode'];
								$city = $row['city'];
							?>
							<p><?php echo $da1;?>,<br> <?php echo $da2;?>, <?php echo $postcode;?>, <?php echo $city?>,<br> <?php echo $state;?></p>
						</div>
					</div>

				</div>
			</div>
			<div id="fourth_row">
			<label style="font-size:20px; font-weight:900;"> Order Information</label>
			<br>
			<br>
				<table>
				<tr>
					<th>No.</th>
					<th>Product Description</th>
					<th>Qty</th>
					<th>Unit Price(RM) </th>
					<th>Total(RM) </th>
				</tr>
				<?php
				$counter = 1;
				$gtt=0;
				$cart = mysqli_query($connect, "SELECT * FROM cart 
				JOIN customer ON cart.customer_id = customer.customer_id 
				JOIN product ON cart.product_id = product.product_id 
				JOIN product_detail ON product.product_detail_id = product_detail.product_detail_id 
				JOIN product_color ON product_color.product_color_id = product.product_color_id 
				JOIN product_size ON product_size.product_size_id = product.product_size_id 
				JOIN customer_order ON cart.customer_id = customer.customer_id WHERE cart.customer_id='$cusid' AND cart.payment_status = 1 AND customer_order.order_date='$date'");

				while($table = mysqli_fetch_assoc($cart))
				{
					$product_subtotal=$table['cart_subtotal'];
					$product_id=$table['product_id'];
					$product_quantity=$table['product_quantity'];
					//$updatestock=mysqli_query($connect,"UPDATE product SET product_stock = product_stock - '$product_quantity' WHERE product_id = '$product_id'");
			?>
					<tr>
						<td><?php echo $counter . '.';?></td>
						<td><?php echo $table['product_name'];?></td>
						<td><?php echo $table['product_quantity'];?> </td>
						<td><?php echo $table['product_price'];?> </td>
						<td><?php echo $table['cart_subtotal'];?> </td>
					</tr>
				<?php
					$counter++; 
					$gtt=$gtt+$product_subtotal;
				}
				?>
				</table>
			
			</div>
				<div class="row justify-content-end" style="padding:10px;">
					<div class="col-md-3">
						<p style="font-weight:700;">Total</p>
					</div>
					<div class="col-md-3">
						<span> <p>RM  <?php echo number_format((float)$gtt, 2, '.', '') ?></p> </span>
					</div>
				</div>


			<div id="btn_container">
			<input type="button" value="Print" id="print_btn">
			</div>

		</div>
	</div>



</body>
<script>
    window.addEventListener("DOMContentLoaded", function() {
		$("#print_btn").click(function () {
			print();
		
		});
		
	});
</script>
</html>