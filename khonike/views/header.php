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
                                    <?php
                                    if ($_SESSION['level'] == 1) { ?>
                                        <li class=""><a href="properties-carousel2.php">Properties</a>

                                        </li>
                                    <?php } ?>
                                    <li class=""><a href="">Agents</a>
                                        <!-- <ul class="sub-menu">
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
                                        </ul> -->
                                    </li>
                                    <li class=""><a href="">Agencies</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="agencies.html">Agencies</a></li>
                                            <li><a href="agency-details.html">Agency Details</a></li>
                                        </ul> -->
                                    </li>
                                    <li class=""><a href="faq.php">FAQ</a>
                                    </li>
                                    <li class=""><a href="contact-us.php">Contact</a>
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