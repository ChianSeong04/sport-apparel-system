<!DOCTYPE HTML>
<html>
	<head>
	<title>All Purchase</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

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
		<h4>All Purchase</h4>
			<div class="p-3" >
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
				<div id="product_container">
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
					<div class="row extra1" id="extend">
							<h5>Order ID </h5>
							<p class="details">A878287</p>
							<h5>Delivery Address </h5>
							<p id="receipient_address"> Lot No 7, Seksyen 33, Jalan Melayu, Off Jalan Masjid India 50100 Kuala Lumpur</p>
							<h5>Order Date </h5>
							<p class="details">15/4/2023</p>
							<h5>Payment Method </h5>
							<p class="details">Credit/Debit</p>

					</div>
					<div class="button_section" id="button_section1">
						<button type="button" id="show_btn" class="show_btn1" value="1">Show More</button>
					</div>
				</div>
				

			</div>

		</div>
		</div>
		<?php include("footer.php") ?>
	</body>
	
<script>
    window.addEventListener("DOMContentLoaded", function() {
		$("div#extend").hide();
		
		$("body").on("click", "button#show_btn", function(){
			num = $(this).val();
			$(".extra"+num).toggle(function(){
				$(".show_btn"+num).remove();
				button = '<button type="button" id="hide_btn" class="hide_btn'+num+'" value="'+num+'">Show Less</button>';
				$("#button_section"+num).append($(button));
				
			});
		});
		$("body").on("click", "button#hide_btn", function(){
			num = $(this).val();
			$(".extra"+num).toggle(function(){
				$(".hide_btn"+num).remove();
				button = '<button type="button" id="show_btn" class="show_btn'+num+'" value="'+num+'">Show More</button>';
				$("#button_section"+num).append($(button));
				
			});
		});
		


	});

</script>
</html>
