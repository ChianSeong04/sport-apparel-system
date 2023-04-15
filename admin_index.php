<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/admin_dashboard_style.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">Sparta Sport</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-user"></i>
                    <span class="link-name">Customer</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-shopping-basket"></i>
                    <span class="link-name">Order</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-palette"></i>
                    <span class="link-name">Product Color</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-bookmark-full"></i>
                    <span class="link-name">Product Type</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-bolt"></i>
                    <span class="link-name">Product Brand</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-box"></i>
                    <span class="link-name">Product</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Product Sales</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-setting"></i>
                    <span class="link-name">Profile</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Admin Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-user-plus"></i>
                        <span class="text">Total Customers</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-shopping-basket"></i>
                        <span class="text">Total Orders</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-box"></i>
                        <span class="text">Total Products</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Orders</span>
                </div>

                <div class="activity-data">
                    <div class="data">
                        <span class="data-title">Order ID</span>
                        <span class="data-list">Prem Shahi</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Customer Name</span>
                        <span class="data-list">Niama</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Product Name</span>
                        <span class="data-list">2022-02-12</span>

                    </div>
                    <div class="data">
                        <span class="data-title">Quantity</span>
                        <span class="data-list">New</span>

                    </div>
                    <div class="data">
                        <span class="data-title">Order Subtotal</span>
                        <span class="data-list">Liked</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Order Date</span>
                        <span class="data-list">Liked</span>
                    </div>
                    <div class="data">
                        <span class="data-title">Order Status</span>
                        <span class="data-list">Liked</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>
</body>
</html>