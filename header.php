<!-- Start Top Nav -->
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
					<a class="navbar-sm-brand text-light text-decoration-non" href="spartasportapparelfyp@gmail.com">spartasportapparelfyp@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
					<a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">016-123 4567</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->

<!--top header-->
<link rel="stylesheet" href="assets/css/templatemo.css">
<nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <!--<a class="navbar-brand text-success logo h1 align-self-center" href="index.html">-->
			<a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                <img src="images/logo.png" width="200" height="150"  alt="" />
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
						
                        <li class="nav-item" id="product_header_selection">
                            <a class="nav-link"  href="product.php">Product</a>
							<div class="dropdown-content">
							<a href="#">Men Sport Wear</a>
							<a href="#">Women Sport Wear</a>
							</div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>

                    <a class="nav-icon position-relative text-decoration-none" href="add_to_cart.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                    <?php 
                    if(isset($_SESSION["id"]) && !empty($_SESSION["id"])){
                        $user_id=$_SESSION["id"];
                        $result=mysqli_query($connect,
                        "SELECT * FROM customer WHERE customer_id = '$user_id'");
                        $count_cart= mysqli_query($connect, "SELECT * FROM cart WHERE payment_status='0' AND customer_id='$user_id' ");

                        $row=mysqli_fetch_assoc($result);
                        $cart_total = mysqli_num_rows($count_cart)
                        ?> 
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"><?php echo $cart_total; ?></span>
                    <?php
                    }else{
                    ?>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>                    
                    <?php
                    }
                    ?>
                    </a>

                    <?php 
                    if(isset($_SESSION["id"]) && !empty($_SESSION["id"])){
                        $user_id=$_SESSION["id"];
                        $result=mysqli_query($connect,
                        "SELECT * FROM customer WHERE customer_id = '$user_id'");

                        $row=mysqli_fetch_assoc($result);
                        ?>
                        
                        <div class="dropdown-personal">
                            <a class="nav-icon position-relative text-decoration-none" href="profile.php">
                                <i class="fa fa-fw fa-user text-dark mr-3"></i>
                                Hi, <?php echo $row["customer_first_name"] ?>
                            </a>
                            <div class="dropdown-content-personal">
                                <a href="profile.php">My Account</a>
                                <a href="purchase_history.php">My Order</a>
                                <a href="logout.php">Log Out</a>
                            </div>
                        </div>
                    <?php
                    }else{
                    ?>
                            <a class="nav-icon position-relative text-decoration-none" href="user_login.php">
                                Login/Register
                            </a>                       
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </nav>
<!-- top header -->