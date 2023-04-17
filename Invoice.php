<!DOCTYPE HTML>
<html>
<head>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
#receipt{
	border-style:none;
	background-color:#ffffff;
	box-shadow: 0 10px 10px 0 rgb(0 0 0 / 10%);
	width:80%;
	margin:64px auto;
	padding: 27px 50px 32px;
	box-sizing: border-box;
		
}

#title{
	font-family: 'Roboto', sans-serif;
	font-size: 1.5rem;
	
}

table
{
	margin: auto;
	width: 90%;
    text-align: center;
	border-collapse: collapse;
}

tr
{
	height:50px;
}

tr:nth-child(odd) 
{
    background-color: #f2f2f2;
}

td
{
	padding:5px;
}

#print_btn{
	padding: 10px 50px;
	text-align:center;
	font-size: 18px;
	border-radius: .3rem;
	border-style: none;
	color: #ffffff;
	background-color: #59AB6E;	
}

</style>
</head>
<body style="background-color:#eff0f5;">
	<div id="receipt">
		<div id="container" style="padding: 15px;">
			<div style="margin:auto; display:flex; justify-content: space-between; border-bottom: 1px solid grey;">
				<div id="logo">
					<img src="assets/img/sparta_logo.png" id="logo "width="160px" height="90px">
				</div>
				<div style="display: flex;justify-content: center;align-items: center;">
					<p id="title">Invoice </p>
				</div>
			</div>
			
			<div style="padding: 15px; border-bottom: 1px solid grey;">
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
			
			<div style="padding: 15px; border-bottom: 1px solid grey;">
				<div class="row">
					<div class="col-md-12">
						<div >
							<p style="font-weight:900;">Billing Address</p>
							<p>No.6, Jln Gombak,<br> Taman Gombak, 68100 Taman Gombak,<br> Selangor</p>
						</div>
					</div>

				</div>
			</div>
			<div style="border-bottom:1px solid grey; padding:10px;">
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


			<div style="display: flex; width:45%;margin:auto; padding-top:5%; justify-content: center;">
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