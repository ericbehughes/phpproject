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
                                echo "<div class='alert alert-danger' >";
                                echo '<span class="align-middle">Username must only include letters and numbers<br></span>';
                                echo "</div>";
                            } else if ($_GET['error'] == 'fullname') {
                                echo "<div class='alert alert-danger' >";
                                echo '<span class="align-middle">Full Name must only include letters<br></span>';
                                echo "</div>";
                            } else if ($_GET['error'] == 'emailaddress') {
                                echo "<div class='alert alert-danger' >";
                                echo '<span class="align-middle">Please enter a valid Email Address<br></span>';
                                echo "</div>";
                            } else if ($_GET['error'] == 'phone') {
                                echo "<div class='alert alert-danger' >";
                                echo '<span class="align-middle">Please enter a valid Phone Number<br></span>';
                                echo "</div>";
                            } else if ($_GET['error'] == 'characterlength') {
                                echo "<div class='alert alert-danger' >";
                                echo '<span class="align-middle">Please enter a valid number of characters<br></span>';
                                echo "</div>";
                            } else if ($_GET['error'] == 'existinguser') {
                                echo "<div class='alert alert-danger' >";
                                echo '<span class="align-middle">Username or email already exists<br></span>';
                                echo "</div>";
                            }
                        }
                        ?>

                        <!-- Registration Tab -->
                        <div id="register-tab" class="tab-pane">
                            <form action="../assets/php/register.php" method="POST">
                                <div class="row">
                                    <div class="col-4 mb-30">
                                    <select class="nice-select" name="registerType" id="">
                                        <option value="Customer">Customer</option>
                                        <option value="Vendor">Vendor</option>
                                    </select>
                                    </div>
                                    <div class="col-12 mb-30"><input type="text" name="usernameRegister" placeholder="Username" value="<?= ($_GET['user']); ?>" required></div>
                                    <div class="col-12 mb-30"><input type="password" name="passwordRegister" placeholder="Password" required></div>
                                    <div class="col-12 mb-30"><input type="text" name="fullnameRegister" placeholder="Full Name" value="<?= ($_GET['name']); ?>" required></div>
                                    <div class="col-12 mb-30"><input type="email" name="emailRegister" placeholder="Email" value="<?= ($_GET['mail']); ?>" required></div>
                                    <div class="col-12 mb-30"><input type="date" name="dobRegister" placeholder="Date of Birth" min="2002-10-09" max="2020-10-09" value="<?= ($_GET['dob']); ?>" required></div>
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

        <?php
        include_once("footer.php");
        ?>
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