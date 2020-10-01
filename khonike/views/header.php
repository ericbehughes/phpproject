<?php
session_start();
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Khonike - Real Estate Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="../assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/iconfont.min.css">
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/helper.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="../assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header class="header header-sticky">
            <div class="header-bottom menu-center">
                <div class="container">
                    <div class="row justify-content-between">

                        <!--Logo start-->
                        <div class="col mt-10 mb-10">
                            <div class="logo">
                                <a href="index.php"><img src="../assets/images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <!--Logo end-->

                        <!--Menu start-->
                        <div class="col d-none d-lg-flex">
                            <nav class="main-menu">
                                <ul>
                                    <li class=""><a href="index.php">Home</a>
                                    </li>
                                    <li class="has-dropdown"><a href="properties.html">Properties</a>
                                        <ul class="sub-menu">
                                            <li class="has-dropdown"><a href="properties.html">Properties Grid</a>
                                                <ul class="sub-menu">
                                                    <li><a href="properties.html">Default Layout</a></li>
                                                    <li><a href="properties-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="properties-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="properties-list-left-sidebar.html">Properties List</a>
                                                <ul class="sub-menu">
                                                    <li><a href="properties-list-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="properties-list-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="properties-carousel.html">Properties Carousel</a>
                                                <ul class="sub-menu">
                                                    <li><a href="properties-carousel.html">Carousel Single Row</a></li>
                                                    <li><a href="properties-carousel2.html">Carousel Double Row</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="single-properties.html">Single Properties</a>
                                                <ul class="sub-menu">
                                                    <li><a href="single-properties.html">Left Sidebar</a></li>
                                                    <li><a href="single-properties-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="single-properties-gallery.html">With Gallrey</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="agent.html">agents</a>
                                        <ul class="sub-menu">
                                            <li class="has-dropdown"><a href="agents.html">Agents Grid</a>
                                                <ul class="sub-menu">
                                                    <li><a href="agents-3-column.html">Three Column</a></li>
                                                    <li><a href="agents.html">Four Column</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="agents-carousel-3-column.html">Agents Carousel</a>
                                                <ul class="sub-menu">
                                                    <li><a href="agents-carousel-3-column.html">Three Column</a></li>
                                                    <li><a href="agents-carousel2-3-column.html">Three Column Double Row</a></li>
                                                    <li><a href="agents-carousel-4-column.html">Four Column</a></li>
                                                    <li><a href="agents-carousel2-4-column.html">Four Column Double Row</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="agent-details.html">Agent Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="agencies.html">Agencies</a>
                                        <ul class="sub-menu">
                                            <li><a href="agencies.html">Agencies</a></li>
                                            <li><a href="agency-details.html">Agency Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="news.html">News</a>
                                        <ul class="sub-menu">
                                            <li><a href="news.html">Default Layout</a></li>
                                            <li><a href="news-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="news-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="news-carousel.html">Carousel Single Row</a></li>
                                            <li><a href="news-carousel2.html">Carousel Double Row</a></li>
                                            <li><a href="news-details.html">Details Left Sidebar</a></li>
                                            <li><a href="news-details-right-sidebar.html">Details Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="#">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about-us.html">About us</a></li>
                                            <li><a href="add-properties.html">Add Properties</a></li>
                                            <li><a href="contact-us.html">Contact us</a></li>
                                            <li><a href="gallery-2-column.html">Gallery 2 Column</a></li>
                                            <li><a href="gallery-3-column.html">Gallery 3 Column</a></li>
                                            <li><a href="gallery-4-column.html">Gallery 4 Column</a></li>
                                            <li><a href="login-register.html">Login & Register</a></li>
                                            <li><a href="my-account.php">My Account</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--Menu end-->

                        <!--User start-->
                        <div class="col mr-sm-50 mr-xs-50">
                            <div class="header-user">
                                <?php
                                if (isset($_SESSION['id'])) {
                                    echo '<a href="my-account.php" class="user-toggle"><i class="pe-7s-user"></i><span>My Account</span>
                                    </a>';
                                } else {
                                    echo '<a href="login.php" class="user-toggle"><i class="pe-7s-user"></i><span>Login / Register</span>
                                    </a>';
                                }
                                ?>
                            </div>
                        </div>

                        <!--User end-->
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header section end-->

</body>

</html>