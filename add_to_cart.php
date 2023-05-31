<?php
include("session_connect.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<?php
		if (isset($_GET['delete'])) 
		{
			$pid=$_GET['id'];
			$lol=mysqli_query($connect,"DELETE from cart WHERE cart_id='$pid'");
			if($lol)
			{
				header("location:add_to_cart.php");
			}
		}
	?>

    <title>Add To Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
	
	<link rel="stylesheet" href="package/dist/sweetalert2.min.js">
	<link rel="stylesheet" href="package/dist/sweetalert2.all.min.js">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">
	<!--Sweet Alert Package-->
	<script src="package/dist/sweetalert2.all.min.js"></script>
	<script src="package/dist/sweetalert2.min.js"></script>

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
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

    <!-- Header -->
    <?php include("header.php") ?>
    <!-- Close Header -->

	<script type="text/javascript">
	function confirmation()
	{
		var choice;
		choice=confirm("Do you want to delete product from cart?");
		return choice;
	}
	</script>

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!--Start Content-->
    <div class="ckeckout">
        <div class="container">
            <div class="ckeckout-top">
                <div class="cart-items heading">
                <h3 class="mt-5">My Shopping Bag</h3>
                    <form method="post">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Product</th>
                                    <th>Product Name</th>
                                    <th>Product Quantity</th>
                                    <th>Product Price</th>
                                    <th>Product Subtotal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
							<?php
								
								$grand=0;
								$lol=$_SESSION["id"];
								//remove out of stock product
								mysqli_query($connect,"DELETE cart FROM cart 
								JOIN customer ON cart.customer_id = customer.customer_id 
								JOIN product ON cart.product_id = product.product_id 
								JOIN product_detail ON product.product_detail_id = product_detail.product_detail_id 
								JOIN product_color ON product_color.product_color_id = product.product_color_id 
								JOIN product_size ON product_size.product_size_id = product.product_size_id WHERE cart.customer_id='$lol' AND cart.payment_status=0 AND product.product_stock=0");
								

								//remove deleted product
								mysqli_query($connect,"DELETE cart FROM cart 
								JOIN customer ON cart.customer_id = customer.customer_id 
								JOIN product ON cart.product_id = product.product_id 
								JOIN product_detail ON product.product_detail_id = product_detail.product_detail_id 
								JOIN product_color ON product_color.product_color_id = product.product_color_id 
								JOIN product_size ON product_size.product_size_id = product.product_size_id WHERE cart.customer_id='$lol' AND cart.payment_status=0 AND product_detail.product_status=0");

								
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
                                    <td class="align-middle"><?php echo '<img src="images/'.$row['product_image'].'" height="200px" width="200px">';?></td>
                                    <td class="align-middle"><?php echo $row['product_name']; ?><span style="font-size:14px; color:grey;"><br>Variation: (<?php echo $row['product_color']; ?>,<?php echo $row['product_size']; ?>)</span></td>
                                    <td class="align-middle"><input type="number" name="qty" id="qty"  min="1" max="<?php echo $row['product_stock'] ?>" value="<?php echo $row['product_quantity']; ?>" style="width:80%;" onchange="calsubtotal(<?php echo $row['product_price'] ?>,<?php echo $row['cart_id'] ?>,this.value),caltotal()" ></td>
                                    <td class="align-middle">RM <?php echo $row['product_price']; ?></td>
                                    <td class="align-middle">RM <span id="subtotal-<?php echo $row['cart_id'] ?>"> <?php echo number_format("$subtotal",2); ?></span></td>
                                    <td class="align-middle"><a class="btn btn-danger" href="checkout.php?delete&id=<?php echo $row['cart_id']; ?>" onclick="return confirmation()">DELETE</a></td>
                                </tr>
                                <?php
									$grand+=$subtotal;
								}
								?>

                                <tr class="word table-dark">
                                    <th  class="align-middle" style="text-align:center;" colspan="5">Grandtotal</th>
                                    <th  class="align-middle" name="grandtotal"> RM <span id="total"><?php echo number_format("$grand",2); ?></span></th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col text-end mt-2">
                            <button type="button" class="btn btn-dark mb-3" id="pay_btn" name="pay">Pay Now</button>
                        </div>
                    </form>
					
					<?php
					if(isset($_POST["pay"]))
					{
						if($nop==0){
							?>
							<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
							<script>swal({title:"Your Cart is Empty!",
							icon:"error",
							button:"Shop Now!"}	).then(function(){window.location.href="product.php";}); 
							</script>
							<?php
						}else{
						?>
						<script>
							window.location.href="checkout_page.php"
							</script>
						<?php
						}
					}
					?>
					
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--end-ckeckout-->
    <!--End Content-->
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!--Footer-->
    <?php include("footer.php") ?>
    <!--Close Footer-->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3
                }
            }
            ]
        });
	$('#pay_btn').click(function(){
   window.location.href='checkout_page.php';
})
    </script>
    <!-- End Slider Script -->

</body>
</html>

<script>
function calsubtotal(product_price,cart_id,qty){
	var cid = cart_id;
	var price = product_price;
	var quantity = qty;
	console.log(cid);

	$.ajax({
		type:'post',
		url:'subtotal_onchange.php',
		data: {
			cart_id:cid,
			product_price:price,
			qty:quantity
		},
		success:function(data){
			document.getElementById('subtotal-'+cid).innerHTML= data;
			console.log(data);
			
		}
	})
}

function caltotal(){
	$("#total").fadeOut();
	$.ajax({
		type:'post',
		url:'grandtotal_onchange.php',
		success:function(data){
			
			$("#total").fadeIn();
			document.getElementById('total').innerHTML= data;
			console.log(data);
			
		}
	})
}


</script>