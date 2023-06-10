<?php
include("session_connect.php");
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>All Purchase</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/purchase_history_page.css">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
	<link rel="stylesheet" href="assets/css/fontawesome.min.css">
		
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

		



	</head>
	<body>
	<?php include("header.php") ?>
	<div style="background-color:#eff0f5; padding: 5% 0%; min-height:100vh;">
		<div id="purchase">
			<h4>Purchase History</h4>
                <table class="table table-hover">
                    <thead class="table-dark">
                         <tr>
							<th style="text-align:center;">Product</th>
							<th style="text-align:center;">Product Name</th>
							<th style="text-align:center;">Product Quantity</th>
							<th style="text-align:center;">Product Price</th>
							<th style="text-align:center;">Product Subtotal</th>
							<th style="text-align:center;">Product Status</th>
							<th style="text-align:center;">Order Date</th>
							<th style="text-align:center;">Action</th>
                        </tr>
                    </thead>
					<?php
					$lol=$_SESSION["id"];
					$result = mysqli_query($connect, "SELECT * FROM cart 
					JOIN customer ON cart.customer_id = customer.customer_id 
					JOIN product ON cart.product_id = product.product_id 
					JOIN product_detail ON product.product_detail_id = product_detail.product_detail_id 
					JOIN product_color ON product_color.product_color_id = product.product_color_id 
					JOIN customer_order ON customer_order.order_id = cart.payment_status
					JOIN product_size ON product_size.product_size_id = product.product_size_id WHERE cart.customer_id='$lol' AND cart.payment_status!=0 ");
					while($row = mysqli_fetch_assoc($result))
					{
					?>
					<tbody>
					<tr>
						<td class="align-middle" style="text-align:center; "><?php echo '<img src="images/'.$row['product_image'].'" width="200px" height="200px">';	?></td>
						<td class="align-middle" style="text-align:center; "><?php echo $row['product_name']; ?><br>Variation: (<?php echo $row['product_color']; ?>,<?php echo $row['product_size']; ?>)</span></td>
						<td class="align-middle" style="text-align:center; "><?php echo $row['product_quantity']; ?></td>
						<td class="align-middle" style="text-align:center; ">RM <?php echo $row['product_price']; ?></td>
						<td class="align-middle" style="text-align:center;">RM <?php echo $row['cart_subtotal']; ?></td>
						<td class="align-middle" style="text-align:center; "><?php echo $row['order_status']; ?></td>
						<td class="align-middle" style="text-align:center; "><?php echo $row['order_date']; ?></td>
						<td class="align-middle" style="text-align:center; "><a style="color:white;" href="product_details.php?view&id=<?php echo $row['product_detail_id']; ?>" class="btn btn-warning">Purchase Again</a></td>
					</tr>
					<?php
					}
					?>
					</tbody>
            </table>
		</div>
	</div>
		<?php include("footer.php") ?>
	</body>
</html>
