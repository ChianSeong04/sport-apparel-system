<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add To Cart</title>
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
                            <tbody>
                                <tr>
                                    <td class="align-middle"><img src="images/backImg.jpg" style="height:200px;weight:200px;"></td>
                                    <td class="align-middle">Women</td>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">RM 1500.00</td>
                                    <td class="align-middle">RM 1500.00</td>
                                    <td class="align-middle"><button type="button" class="btn btn-danger">DELETE</button></td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img src="images/backImg.jpg" style="height:200px;weight:200px;"></td>
                                    <td class="align-middle">Women</td>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">RM 1500.00</td>
                                    <td class="align-middle">RM 1500.00</td>
                                    <td class="align-middle"><button type="button" class="btn btn-danger">DELETE</button></td>
                                </tr>

                                <tr class="word table-dark">
                                    <th  class="align-middle" style="text-align:center;" colspan="5">Grandtotal</th>
                                    <th  class="align-middle" > RM <span id="total">123123123</span></th>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col text-end mt-2">
                            <button type="submit" class="btn btn-dark mb-3">Pay Now</button>
                        </div>
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