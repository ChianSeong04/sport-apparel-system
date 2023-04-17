<!DOCTYPE HTML>
<html>
	<head>
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<style>

#purchase{
	border-style:none;
	background-color:#ffffff;
	box-shadow: 0 10px 10px 0 rgb(0 0 0 / 10%);
	width:80%;
	margin:64px auto;
	padding: 27px 50px 32px;
	box-sizing: border-box;
		
}

button{
	padding: 10px 50px;
	text-align:center;
	font-size: 18px;
	border-radius: .3rem;
	border-style: none;
	color: #ffffff;
	background-color: #59AB6E;	
}

.button_section{
	padding:10px;
	display: flex;
	align-items: center;
	justify-content: center;
	
}

#extend{
	padding:10px;
	
	
}


	
</style>


	</head>
	<body style="background-color:#eff0f5;">
		<div id="purchase">
		<h2>All Purchase</h2>
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
				<div style="border-bottom:1px solid grey; padding:10px;">
					<div class="row">
		
						<div class="col-md-2">
							<img src="assets/img/category_img_01.jpg" width="80px" height="80px">
						</div>
							
						<div class="col-md-6">
							<span id="prod_title"><p>Casio Watch</p>
							<span id="qty" style="font-size:14px; color:grey; "><p>x 2 </p></span>

						</div>
							
						<div class="col-md-2">
							<p>
								<span><p>RM 150</p></span>
								
							</p>
						</div>
							
							
						<div class="col-md-2">
							<p>
								<span><p>RM 300</p> </span>
								
							</p>
						</div>
							

						
					</div>
					<div class="row extra1" id="extend">
							<h4>Order ID </h4>
							<p style="color:grey; font-size:14px;">A878287</p>
							<h4>Delivery Address </h4>
							<p id="receipient_address"> Lot No 7, Seksyen 33, Jalan Melayu, Off Jalan Masjid India 50100 Kuala Lumpur</p>
							<h4>Order Date </h4>
							<p style="color:grey; font-size:14px;">15/4/2023</p>
							<h4>Payment Method </h4>
							<p style="color:grey; font-size:14px;">Credit/Debit</p>

					</div>
					<div class="button_section" id="button_section1">
						<button type="button" id="show_btn" class="show_btn1" value="1">Show More</button>
					</div>
				</div>
				
				<!-- another product	-->
				<div style="border-bottom:1px solid grey; padding:10px;">
					<div class="row">
		
						<div class="col-md-2">
							<img src="assets/img/category_img_01.jpg" width="80px" height="80px">
						</div>
							
						<div class="col-md-6">
							<span id="prod_title"><p>Casio Watch</p>
							<span id="qty" style="font-size:14px; color:grey; "><p>x 2 </p></span>

						</div>
							
						<div class="col-md-2">
							<p>
								<span><p>RM 150</p></span>
								
							</p>
						</div>
							
							
						<div class="col-md-2">
							<p>
								<span><p>RM 300</p> </span>
								
							</p>
						</div>
							

						
					</div>
					<div class="row extra2" id="extend">
						
							<h4>Order ID </h4>
							<p style="color:grey; font-size:14px;">A111111</p>
							<h4>Delivery Address </h4>
							<p id="receipient_address">Lorong Mahsuri 3, Kuah, 07000 Langkawi, Kedah</p>
							<h4>Order Date </h4>
							<p style="color:grey; font-size:14px;">23/2/2023</p>
							<h4>Payment Method </h4>
							<p style="color:grey; font-size:14px;">COD</p>

					</div>
					<div class="button_section" id="button_section2">
						<button type="button" id="show_btn" class="show_btn2" value="2">Show More</button>
					</div>
				</div>

			</div>

		</div>
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
