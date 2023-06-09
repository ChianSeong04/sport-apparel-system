<?php include("session_connect.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sparta Sport Apparel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body>

    <!-- Header -->
	<?php include("header.php") ?>
    <!-- Close Header -->

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



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <!--<li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>-->
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="images/shirt.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <!--<h1 class="h1 text-success"><b>Zay</b> eCommerce</h1>-->
								<img src="images/logo.png" width="200" height="200"  alt="" />
                                <h1 class="h1">Sparta Sport Apparel</h1>
								<p>
								"Sparta Sport Apparel" is a website which provides services for selling well-known brand sport apparel products.
								Our webiste mainly selling sport brand such as Nike, Puma, and Under Armour.
								</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="images/pants.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1" style="font-weight:bold">Shop Now!</h1>
                                <h3 class="h2">Welcome to Sparta Sport Apparel</h3>
								<p>
								Register now to join our member! 
								</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Categories-->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
				<div class="position-relative d-flex align-items-end">
					<a href="product.php"><img src="images/womensportswear.jpg" class="img-fluid"></a>
					<div class="position-absolute bottom-0 start-0" style="margin-bottom:40px;margin-left:10px;">
						<h5 style="font-size:1.5rem;font-style:bold;color:white;">Women Sport Wear</h5>
						<a href="product.php" class="btn btn-success">Go Shop</a>
					</div>
				</div>
            </div>
            <div class="col-md-6">
				<div class="position-relative d-flex align-items-end">
					<a href="product.php"><img src="images/mensportswear.jpg" class="img-fluid"></a>
					<div class="position-absolute bottom-0 start-0" style="margin-bottom:40px;margin-left:10px;">
						<h5 style="font-size:1.5rem;font-style:bold;">Men Sport Wear</h5>
						<a href="product.php" class="btn btn-success">Go Shop</a>
					</div>
				</div>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->

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
</body>

</html>