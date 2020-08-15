<?php
include 'includes/autoloader.inc.php';
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

        <?php
        include_once('header.php');
        ?>

        <!--Page Banner Section start-->
        <div class="page-banner-section section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="page-banner-title">Login or Register</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Login or Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Banner Section end-->

        <!--Login & Register Section start-->
        <div class="login-register-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-12 ml-auto mr-auto">

                        <h4 class="login-register-tab-list nav">Register</h4>

                        <!-- Validation Error Messages -->
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == 'username') {
                                echo '<p>Username must only include letters and numbers</p>';
                            } else if ($_GET['error'] == 'fullname') {
                                echo '<p>Full Name must only include letters</p>';
                            } else if ($_GET['error'] == 'emailaddress') {
                                echo '<p>Please enter a valid Email Address</p>';
                            } else if ($_GET['error'] == 'phone') {
                                echo '<p>Please enter a valid Phone Number!</p>';
                            } else if ($_GET['error'] == 'characterlength') {
                                echo '<p>Please enter a valid number of characters</p>';
                            } else if ($_GET['error'] == 'existinguser') {
                                echo '<p>Username or email already exists</p>';
                            }
                        }
                        ?>

                        <!-- Registration Tab -->
                        <div id="register-tab" class="tab-pane">
                            <form action="classes/register.class.php" method="POST">
                                <div class="row">
                                    <div class="col-12 mb-30"><input type="text" name="usernameRegister" placeholder="Username" value="<?= ($_GET['user']); ?>" required></div>
                                    <div class="col-12 mb-30"><input type="password" name="passwordRegister" placeholder="Password" required></div>
                                    <div class="col-12 mb-30"><input type="text" name="fullnameRegister" placeholder="Full Name" value="<?= ($_GET['name']); ?>" required></div>
                                    <div class="col-12 mb-30"><input type="email" name="emailRegister" placeholder="Email" value="<?= ($_GET['mail']); ?>" required></div>
                                    <div class="col-12 mb-30"><input type="date" name="dobRegister" placeholder="Date of Birth" min="1920-10-09" max="2002-10-09" value="<?= ($_GET['dob']); ?>" required></div>
                                    <div class="col-12 mb-30"><input type="tel" name="phoneRegister" placeholder="123-456-7890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" value="<?= ($_GET['phone']); ?>" required></div>
                                    <div class="col-12 mb-50"><input type="text" name="addressRegister" placeholder="Address" value="<?= ($_GET['address']); ?>" required></div>

                                    <div class="col-12"><button type="submit" class="btn" name='register-submit'>Register</button></div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!--Login & Register Section end-->

        <!--Footer section start-->
        <footer class="footer-section section" style="background-image: url(../assets/images/bg/footer-bg.jpg)">

            <!--Footer Top start-->
            <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
                <div class="container">
                    <div class="row row-25">

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                            <img src="../assets/images/logo-footer.png" alt="">
                            <p>Khonike - Real Estate Bootstrap 4 Templatethe best theme for elit, sed do to eiumod tempor dolor sit amet, ctetur adipiscing elit seddo dolor sit amet.</p>
                            <div class="footer-social">
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                            <h4 class="title"><span class="text">Contact us</span><span class="shape"></span></h4>
                            <ul>
                                <li><i class="fa fa-map-o"></i><span>256, 1st AVE, Manchester 125 , Noth England</span></li>
                                <li><i class="fa fa-phone"></i><span><a href="#">+012 345 678 102</a><a href="#">+012 345 678 101</a></span></li>
                                <li><i class="fa fa-envelope-o"></i><span><a href="#">info@example.com</a><a href="#">www.example.com</a></span></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                            <h4 class="title"><span class="text">Useful links</span><span class="shape"></span></h4>
                            <ul>
                                <li><a href="#">Rental Builidngs</a></li>
                                <li><a href="#">Browe all Categories</a></li>
                                <li><a href="#">Top Mortagages Rates</a></li>
                                <li><a href="#">RentalTerms of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                            <h4 class="title"><span class="text">Newsletter</span><span class="shape"></span></h4>

                            <p>Subscribe our newsletter and get all latest news about our latest properties, promotions, offers and discount</p>

                            <form id="mc-form" class="mc-form footer-newsletter">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Email Here.." />
                                <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->

                        </div>
                        <!--Footer Widget end-->

                    </div>
                </div>
            </div>
            <!--Footer Top end-->

            <!--Footer bottom start-->
            <div class="footer-bottom section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright text-center">
                                <p>Copyright &copy;2018 <a href="#">Khonike</a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->

        </footer>
        <!--Footer section end-->
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="../assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/map-place.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>