<?php
session_start();
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $fullname = $_SESSION['fullname'];
    $email = $_SESSION['email'];
    $dob = $_SESSION['dob'];
    $phone = $_SESSION['phone'];
    $address = $_SESSION['address'];
    $level = $_SESSION['level'];
    $status = $_SESSION['status'];
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
                            <h1 class="page-banner-title">My Account</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">My Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Page Banner Section end-->

            <!--Login & Register Section start-->
            <div class="login-register-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
                <div class="container">
                    <div class="row row-25">

                        <div class="col-lg-4 col-12 mb-sm-50 mb-xs-50">
                            <ul class="myaccount-tab-list nav">
                                <li><a class="active" href="#profile-tab" data-toggle="tab"><i class="pe-7s-user"></i>My Profile</a></li>
                                <?php 
                                if ($_SESSION['level'] == 2) {
                                   echo '<li><a href="#agency-tab" data-toggle="tab"><i class="pe-7s-note2"></i>Agency Profile</a></li>
                                   <li><a href="#properties-tab" data-toggle="tab"><i class="pe-7s-photo"></i>My Properties</a></li>
                                   <li><a href="add-properties.php"><i class="pe-7s-back fa-flip-horizontal"></i>Add New Property</a></li>';
                                }
                                ?>
                                <li><a href="#password-tab" data-toggle="tab"><i class="pe-7s-lock"></i>Change Password</a></li>
                                <li><a href="../assets/php/logout.php"><i class="pe-7s-power"></i>Log Out</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-8 col-12">

                            <div class="tab-content">
                                <div id="profile-tab" class="tab-pane show active">
                                    <form action="../assets/php/myaccountUpdate.php" method="POST">
                                        <div class="row">
                                            <div class="col-12 mb-30">
                                                <h3 class="mb-0">Personal Profile</h3>
                                            </div>

                                            <!-- Validation Error Messages -->
                                            <?php
                                            if (isset($_GET['error'])) {
                                                if ($_GET['error'] == 'username') {
                                                    echo '<div class="col-12 mb-30"><p>Username must only include letters and numbers</p></div>';
                                                } else if ($_GET['error'] == 'fullname') {
                                                    echo '<div class="col-12 mb-30"><p>Full Name must only include letters</p></div>';
                                                } else if ($_GET['error'] == 'emailaddress') {
                                                    echo '<p>Please enter a valid Email Address</p>';
                                                } else if ($_GET['error'] == 'phone') {
                                                    echo '<p>Please enter a valid Phone Number!</p>';
                                                } else if ($_GET['error'] == 'characterlength') {
                                                    echo '<p>Please enter a valid number of characters</p>';
                                                }
                                            }
                                            ?>

                                            <div class="col-md-6 col-12 mb-30"><label for="l_name">Username</label><input name="usernameUpdate" type="text" id="u_name" value="<?php echo $username; ?>" required></div>
                                            <div class="col-md-6 col-12 mb-30"><label for="f_name">Fullname</label><input name="fullnameUpdate" type="text" id="f_name" value="<?php echo $fullname; ?>" required></div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_email">Email</label><input name="emailUpdate" type="email" id="personal_email" value="<?php echo $email; ?>" required></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="dob">Date of Birth</label><input name="dobUpdate" type="date" id="dob" min="1920-10-09" max="2002-10-09" value="<?php echo $dob; ?>" required></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_number">Phone Number</label><input name="phoneUpdate" type="tel" id="personal_number" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" value="<?php echo $phone; ?>" required></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_address">Address</label><input name="addressUpdate" type="text" id="personal_address" value="<?php echo $address; ?>" required></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="l_name"></label><input name="passwordUpdate" type="password" id="id" value="<?php echo $password; ?>" hidden></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="l_name"></label><input class="col-2" name="idUpdate" type="text" id="id" value="<?php echo $id; ?>" hidden></div>
                                                    <input name="levelUpdate" type="text" id="" value="<?php echo $level; ?>" hidden>
                                                    <input name="statusUpdate" type="text" id="" value="<?php echo $status; ?>" hidden>

                                                    <!-- <div class="col-md-6 col-12 mb-30"><label for="personal_web">Website</label><input type="text" id="personal_web" value="www.example.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_agency">Agencies</label><input type="text" id="personal_agency" value=" Royao Estates, Duplex Estates"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_company">Company</label><input type="text" id="personal_company" value="GTA5"></div> -->
                                                </div>
                                                <!-- <h4>Social</h4>
                                                <div class="row">
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_social_facebook"><i class="fa fa-facebook-official"></i>Facebook</label><input type="text" id="personal_social_facebook" value="www.facebook.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_social_twitter"><i class="fa fa-twitter"></i>Twitter</label><input type="text" id="personal_social_twitter" value="www.twitter.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_social_linkedin"><i class="fa fa-linkedin"></i>Linkedin</label><input type="text" id="personal_social_linkedin" value="www.linkedin.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_social_google"><i class="fa fa-google"></i>Google Plus</label><input type="text" id="personal_social_google" value="www.google.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_social_instagram"><i class="fa fa-instagram"></i>Instagram</label><input type="text" id="personal_social_instagram" value="www.instagram.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_social_pinterest"><i class="fa fa-pinterest"></i>Pinterest</label><input type="text" id="personal_social_pinterest" value="www.pinterest.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_social_skype"><i class="fa fa-skype"></i>Skype</label><input type="text" id="personal_social_skype" value="www.skype.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="personal_social_tumblr"><i class="fa fa-tumblr"></i>Tumblr</label><input type="text" id="personal_social_tumblr" value="www.tumblr.com"></div>
                                                </div> -->
                                            </div>

                                            <div class="col-12 mb-30"><button type="submit" name="myaccountUpdate-submit" class="btn">Save Change</button></div>
                                        </div>
                                    </form>
                                </div> <!-- Profile Tab End -->

                                <?php 
                                if ($_SESSION['level'] == 2) {
                                    echo '
                                    <div id="agency-tab" class="tab-pane">
                                    <form action="#">

                                        <div class="row">
                                            <div class="col-12 mb-30">
                                                <h3 class="mb-0">Agency Profile</h3>
                                            </div>
                                            <div class="col-12 mb-30"><label for="agency_name">Agency Name</label><input type="text" id="agency_name" value=""></div>
                                            <div class="col-12 mb-30"><label for="about_agency">About Agency</label><textarea id="about_agency"></textarea></div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_address">Address</label><input type="text" id="agency_address" value="256, 1st AVE, Manchester 125 , Noth England"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_number">Phone Number</label><input type="text" id="agency_number" value="(756) 447 5779"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_email">Email</label><input type="text" id="agency_email" value="info@example.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_web">Website</label><input type="text" id="agency_web" value="www.example.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_license">License</label><input type="text" id="agency_license" value="AB7876A6"></div>
                                                </div>
                                                <h4>Social</h4>
                                                <div class="row">
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_social_facebook"><i class="fa fa-facebook-official"></i>Facebook</label><input type="text" id="agency_social_facebook" value="www.facebook.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_social_twitter"><i class="fa fa-twitter"></i>Twitter</label><input type="text" id="agency_social_twitter" value="www.twitter.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_social_linkedin"><i class="fa fa-linkedin"></i>Linkedin</label><input type="text" id="agency_social_linkedin" value="www.linkedin.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_social_google"><i class="fa fa-google"></i>Google Plus</label><input type="text" id="agency_social_google" value="www.google.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_social_instagram"><i class="fa fa-instagram"></i>Instagram</label><input type="text" id="agency_social_instagram" value="www.instagram.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_social_pinterest"><i class="fa fa-pinterest"></i>Pinterest</label><input type="text" id="agency_social_pinterest" value="www.pinterest.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_social_skype"><i class="fa fa-skype"></i>Skype</label><input type="text" id="agency_social_skype" value="www.skype.com"></div>
                                                    <div class="col-md-6 col-12 mb-30"><label for="agency_social_tumblr"><i class="fa fa-tumblr"></i>Tumblr</label><input type="text" id="agency_social_tumblr" value="www.tumblr.com"></div>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-30"><button type="submit" class="btn">Save Change</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div id="properties-tab" class="tab-pane">

                                    <div class="row">

                                        <!--Property start-->
                                        <div class="property-item col-md-6 col-12 mb-40">
                                            <div class="property-inner">
                                                <div class="image">
                                                    <a href="single-properties.html"><img src="../assets/images/property/property-1.jpg" alt=""></a>
                                                    <ul class="property-feature">
                                                        <li>
                                                            <span class="area"><img src="../assets/images/icons/area.png" alt="">550 SqFt</span>
                                                        </li>
                                                        <li>
                                                            <span class="bed"><img src="../assets/images/icons/bed.png" alt="">6</span>
                                                        </li>
                                                        <li>
                                                            <span class="bath"><img src="../assets/images/icons/bath.png" alt="">4</span>
                                                        </li>
                                                        <li>
                                                            <span class="parking"><img src="../assets/images/icons/parking.png" alt="">3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <div class="left">
                                                        <h3 class="title"><a href="single-properties.html">Friuli-Venezia Giulia</a></h3>
                                                        <span class="location"><img src="../assets/images/icons/marker.png" alt="">568 E 1st Ave, Miami</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="type-wrap">
                                                            <span class="price">$550<span>M</span></span>
                                                            <span class="type">For Rent</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Property end-->

                                        <!--Property start-->
                                        <div class="property-item col-md-6 col-12 mb-40">
                                            <div class="property-inner">
                                                <div class="image">
                                                    <span class="label">Feature</span>
                                                    <a href="single-properties.html"><img src="../assets/images/property/property-2.jpg" alt=""></a>
                                                    <ul class="property-feature">
                                                        <li>
                                                            <span class="area"><img src="../assets/images/icons/area.png" alt="">550 SqFt</span>
                                                        </li>
                                                        <li>
                                                            <span class="bed"><img src="../assets/images/icons/bed.png" alt="">6</span>
                                                        </li>
                                                        <li>
                                                            <span class="bath"><img src="../assets/images/icons/bath.png" alt="">4</span>
                                                        </li>
                                                        <li>
                                                            <span class="parking"><img src="../assets/images/icons/parking.png" alt="">3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <div class="left">
                                                        <h3 class="title"><a href="single-properties.html">Marvel de Villa</a></h3>
                                                        <span class="location"><img src="../assets/images/icons/marker.png" alt="">450 E 1st Ave, New Jersey</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="type-wrap">
                                                            <span class="price">$2550</span>
                                                            <span class="type">For Sale</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Property end-->

                                        <!--Property start-->
                                        <div class="property-item col-md-6 col-12 mb-40">
                                            <div class="property-inner">
                                                <div class="image">
                                                    <span class="label">popular</span>
                                                    <a href="single-properties.html"><img src="../assets/images/property/property-3.jpg" alt=""></a>
                                                    <ul class="property-feature">
                                                        <li>
                                                            <span class="area"><img src="../assets/images/icons/area.png" alt="">550 SqFt</span>
                                                        </li>
                                                        <li>
                                                            <span class="bed"><img src="../assets/images/icons/bed.png" alt="">6</span>
                                                        </li>
                                                        <li>
                                                            <span class="bath"><img src="../assets/images/icons/bath.png" alt="">4</span>
                                                        </li>
                                                        <li>
                                                            <span class="parking"><img src="../assets/images/icons/parking.png" alt="">3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <div class="left">
                                                        <h3 class="title"><a href="single-properties.html">Ruposi Bangla Cottage</a></h3>
                                                        <span class="location"><img src="../assets/images/icons/marker.png" alt="">215 L AH Rod, California</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="type-wrap">
                                                            <span class="price">$550<span>M</span></span>
                                                            <span class="type">For Rent</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Property end-->

                                        <!--Property start-->
                                        <div class="property-item col-md-6 col-12 mb-40">
                                            <div class="property-inner">
                                                <div class="image">
                                                    <a href="single-properties.html"><img src="../assets/images/property/property-4.jpg" alt=""></a>
                                                    <ul class="property-feature">
                                                        <li>
                                                            <span class="area"><img src="../assets/images/icons/area.png" alt="">550 SqFt</span>
                                                        </li>
                                                        <li>
                                                            <span class="bed"><img src="../assets/images/icons/bed.png" alt="">6</span>
                                                        </li>
                                                        <li>
                                                            <span class="bath"><img src="../assets/images/icons/bath.png" alt="">4</span>
                                                        </li>
                                                        <li>
                                                            <span class="parking"><img src="../assets/images/icons/parking.png" alt="">3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <div class="left">
                                                        <h3 class="title"><a href="single-properties.html">MayaKanon de Villa</a></h3>
                                                        <span class="location"><img src="../assets/images/icons/marker.png" alt="">12 EA 1st Ave, Washington</span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="type-wrap">
                                                            <span class="price">$550<span>M</span></span>
                                                            <span class="type">For Rent</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Property end-->

                                    </div>

                                </div>';
                            }?>
    
                                <div id="password-tab" class="tab-pane">
                                    <form action="../assets/php/myaccountUpdate.php">

                                        <div class="row">
                                            <div class="col-12 mb-30">
                                                <h3 class="mb-0">Change Password</h3>
                                            </div>
                                            <div class="col-12 mb-30"><label for="current_password">Current Password</label><input name="passwordCurrent" type="password" id="current_password" value=""></div>
                                            <div class="col-12 mb-30"><label for="new_password">New Password</label><input name="passwordNew" type="password" id="new_password"></div>
                                            <div class="col-12 mb-30"><label for="confirm_new_password">Confirm New Password</label><input name="passwordConfirm" type="password" id="confirm_new_password"></div>

                                            <div class="col-12 mb-30"><button name="submit-password" type="submit" class="btn">Save Change</button></div>
                                        </div>
                                    </form>
                                </div>
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

<?php
} else {
    header('Location: login.php');
    exit();
}
?>