<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Product Detail Page</title>
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

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
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

    <!--Start Content-->
    <!--start-ckeckout-->
    <div class="ckeckout">
        <div class="container">
            <div class="ckeckout-top">
                <div class=" cart-items heading">
                    <h3>My Shopping Bag</h3>


                    <form method="post">
                        <table>

                            <tr class="word" style="color:white; background-color:black;">
                                <th style="padding:25px; text-align:center; width:100px;">Product</th>
                                <th style="padding:25px; text-align:center; width:12000px;">Product Name</th>
                                <th style="padding:25px; text-align:center; width:20px;">Product Quantity</th>
                                <th style="padding:25px; text-align:center; width:8000px;">Product Price</th>
                                <th style="padding:25px; text-align:center; width:8000px;">Product Subtotal</th>
                                <th style="padding:25px; text-align:center; width:20px;">Action</th>
                            </tr>

                            <tr class="word">
                                <td style="padding:25px; text-align:center;"><img src="images/backImg.jpg" style="height:200px;weight:200px;"></td>
                                <td style="padding:25px; text-align:center;"><br>Women</td>
                                <td style="padding:25px; text-align:center;">1</td>
                                <td style="padding:25px; text-align:center;">RM 1500.00</td>
                                <td style="padding:25px; text-align:center;">RM 1500.00</td>
                                <td style="padding:25px; text-align:center;">DELETE</td>
                            </tr>

                            <tr class="word" style="color:white; background-color:black;">
                                <th style="padding:25px; text-align:center; width:250px;" colspan="5">Grandtotal</th>
                                <th style="padding:25px; text-align:center;" name="grandtotal"> RM <span id="total"></span></th>
                            </tr>
                        </table>
                        <input type="submit" class="word" style="margin-top:50px; width:90px; height:28px; margin-left:1010px; border-radius:5px;" name="pay" value="Pay Now">
                    </form>

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
    </script>
    <!-- End Slider Script -->

</body>

</html>