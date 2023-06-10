<?php
include("session_connect.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us Page</title>
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
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
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



    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1 class="h1">About Us</h1>
                    <p>
                        Welcome to our brand new sport apparel website!
						We are thrilled to provides athletes and fitness enthusiasts with high-quality and stylish sportwear that enhances performance.
						Thank you for choosing our website as your go-to destination for all your sport apparel needs.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/about-hero.svg" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Team</h1>
                <p>
                    Our team has a total of four members which is the leader Wee Chian Seong and members Chon Zi Kang,Goh Yu Heng,and Ng Po Yee.
					<p>Meet the incredible team behind out website!</p>
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><img src="images/chianseong.jpg" alt="Wee Chian Seong" style="width:100%"></div>
                    <h2>Wee Chian Seong </h2>
					<p>Student in Bachelor of Computer Science (Hons.) Artificial Intelligence.</p>
					<p>chianseong020@gmail.com</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><img src="images/zikang.jpg" alt="Chon Zi Kang" style="width:100%"></div>
                    <h2>Chon Zi Kang</h2>
					<p>Student in Bachelor of Computer Science (Hons.) Artificial Intelligence.</p>
					<p>1201200750@student.mmu.edu.com</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><img src="images/yuheng.jpg" alt="Goh Yu Heng" style="width:100%"></div>
                    <h2>Goh Yu Heng</h2>
					<p>Student in Bachelor of Computer Science (Hons.) Artificial Intelligence.</p>
					<p>1201200443@student.mmu.edu.com</p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><img src="images/poyee.jpg" alt="Ng Po Yee" style="width:100%"></div>
                    <h2>Ng Po Yee</h2>
					<p>Student in Bachelor of Information Technology (Honours) (Business Intelligence and Analytics).</p>
					<p>ngpoyee020909@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brands</h1>
                    <p>
                        We are thrilled announce our collaboration with Nike, Puma, and Under Anmour, a leading name in the sportwear industry.
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                   
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <!--<a href="#"><img class="img-fluid brand-img" src="assets/img/brand_01.png" alt="Brand Logo"></a>-->
												<a href="#"><img class="img-fluid brand-img" src="images/nike.png" alt="Nike Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="images/puma.png" alt="Puma Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="images/underarmour.png" alt="UnderArmour Logo"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->


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