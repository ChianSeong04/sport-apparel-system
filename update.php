<?php
	include("session_connect.php");
	session_start();

	$order_date = date("Y-m-d");
	$status_order = "Paid Out";
	$payment_method = "Credit Card";

	if(isset($_POST["place_order"]))
	{
		$payment_type=mysqli_query($connect,"INSERT INTO payment(payment_type,grandtotal) VALUES ($payment_method,'$gtt')");
		$create_order=mysqli_query($connect,"INSERT INTO customer_order (customer_id,order_status,payment_id,order_date) VALUES ('$cusid','$status_order',LAST_INSERT_ID(),'$order_date')");
		$update_cart=mysqli_query($connect,"UPDATE cart SET payment_status=1 WHERE customer_id='$cusid' AND payment_status=0");
	}

?>