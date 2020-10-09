<?php
//include 'includes/autoloader.inc.php';
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
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <style>
        #pageBanner {
            background-image: url(../assets/images/bg/page-banner.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            position: relative;
            z-index: 1;
            padding: 100px 0;
            margin-top: 91px;
        }
    </style>
</head>

<body>

    <div id="main-wrapper">

        <!-- Header -->
        <?php
        include_once('header.php');
        ?>

        <!--Page Banner Section start-->
        <div id="pageBanner" class="page-banner-section section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="page-banner-title">Login or Register</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Login or Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Banner Section end-->

        <!--Login Section start-->
        <div class="login-register-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-12 ml-auto mr-auto">

                        <!-- Validation Error Messages -->
                        <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == 'invalidlogin') {
                                echo "<div class='alert alert-danger' >";
                                echo '<span class="align-middle">Invalid Login<br></span>';
                                echo "</div>";
                            }
                        } else if (isset($_GET['signup']) == "success") {
                            echo "<div class='alert alert-success' >";
                            echo '<span class="align-middle">Registration Successful<br></span>';
                            echo "</div>";
                        }
                        ?>

                        <!-- Login Tab -->
                        <div id="login-tab" class="tab-pane show active">
                            <form action="../assets/php/login.php" method="POST">
                                <div class="row">
                                    <div class="col-12 mb-30"><input name="usernameLogin" type="text" placeholder="Username" value="<?= ($_GET['user']); ?>" required></div>
                                    <div class="col-12 mb-50"><input name="passwordLogin" type="password" placeholder="Password" required></div>
                                    <div class="col-12 mb-30 mr-50">
                                        <button type="submit" name="login-submit" class="btn">Login</button></div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <span>New User to Khonike?&nbsp; <a class="register-toggle" href="register.php">Register!</a></span>
                                        <span><a href="">Forgot Password ?</a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Login & Register Section end-->

        <?php
        include_once("footer.php");
        ?>
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/map-place.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>