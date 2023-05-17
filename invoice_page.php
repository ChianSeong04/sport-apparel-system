<!DOCTYPE HTML>
<html>
<head>
		<title>Invoice</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		
		<link rel="stylesheet" href="assets/css/invoice_page.css">
</head>
<body style="background-color:#eff0f5;">
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
						<span>Invoice Date: 15/4/2023<p></p></span>
						<span>Order Number: SA876283<p></p></span>
						<span>Payment Type: Credit Card<p></p></span>
					</div>
				</div>
			</div>
			
			<div id="third_row">
				<div class="row">
					<div class="col-md-12">
						<div >
							<p style="font-weight:900;">Billing Address</p>
							<p>No.6, Jln Gombak,<br> Taman Gombak, 68100 Taman Gombak,<br> Selangor</p>
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
					<tr>
						<td>1.</td>
						<td>Nike Cloth</td>
						<td>2 </td>
						<td>35.00 </td>
						<td>70.00 </td>
				

					</tr>

				</table>
			
			</div>
				<div class="row justify-content-end" style="padding:10px;">
					<div class="col-md-3">
						<p style="font-weight:700;">Total</p>
					</div>
					<div class="col-md-3">
						<span> <p>RM 70.00 </p> </span>
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