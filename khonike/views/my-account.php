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
    $x = 1;

    // This is used to display the error messages
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    // Includes
    include_once __DIR__ . "/../controllers/propertycontroller.class.php";
    include_once __DIR__ . "/../controllers/photocontroller.class.php";
    include_once __DIR__ . "/../controllers/visitcontroller.class.php";
    include_once __DIR__ . "/../controllers/userscontroller.class.php";

    // Instantiate
    $propertyController = new PropertyController();
    $photoController = new PhotoController();
    $visitController = new VisitController();
    $userController = new UsersController();

    // Calls to DB
    $sellerProperties = $propertyController->showPropertyBySellerId($id);
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
            #propertyPhotoPreview {
                width: 100%;
                height: 290px;
            }

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
                            <h1 class="page-banner-title">My Account</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
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

                        <!-- Tabs Start -->
                        <div class="col-lg-4 col-12 mb-sm-50 mb-xs-50">
                            <ul class="myaccount-tab-list nav">
                                <!-- Profile tab -->
                                <li><a class="<?php
                                                if ($_GET['error'] == 'emptyFields' || $_GET['error'] == 'passwordCurrent' || $_GET['error'] == 'passwordMismatch' || $_GET['error'] == 'passwordLength' || $_GET['error'] == 'passwordRepeat' || $_GET['update'] == 'successPass') {
                                                    echo '';
                                                } else {
                                                    echo 'active';
                                                } ?>" href="#profile-tab" data-toggle="tab"><i class="pe-7s-user"></i>My Profile</a></li>
                                <li><a href="#visits-tab" data-toggle="tab"><i class="pe-7s-note2"></i>Manage Visits</a></li>
                                <!-- Seller Tabs -->
                                <?php
                                if ($_SESSION['level'] == 2) {
                                    echo '<li><a href="#properties-tab" data-toggle="tab"><i class="pe-7s-photo"></i>My Properties</a></li>
                                   <li><a href="add-properties.php"><i class="pe-7s-back fa-flip-horizontal"></i>Add New Property</a></li>';
                                }
                                ?>
                                <!-- Change password tab -->
                                <li><a class="
                                <?php
                                if ($_GET['error'] == 'emptyFields' || $_GET['error'] == 'passwordCurrent' || $_GET['error'] == 'passwordMismatch' || $_GET['error'] == 'passwordLength' || $_GET['error'] == 'passwordRepeat' || $_GET['update'] == 'successPass') {
                                    echo 'active';
                                } else {
                                    echo '';
                                } ?>" href="#password-tab" data-toggle="tab"><i class="pe-7s-lock"></i>Change Password</a></li>
                                <!-- Logout Tab -->
                                <li><a class="" href="../assets/php/logout.php"><i class="pe-7s-power"></i>Log Out</a></li>
                            </ul>
                        </div>
                        <!-- Tabs end -->

                        <!-- Content Pane -->
                        <div class="col-lg-8 col-12">
                            <div class="tab-content">
                                <!-- Personal Profile -->
                                <div id="profile-tab" class="tab-pane show 
                                <?php
                                if ($_GET['error'] == 'emptyFields' || $_GET['error'] == 'passwordCurrent' || $_GET['error'] == 'passwordMismatch' || $_GET['error'] == 'passwordLength' || $_GET['error'] == 'passwordRepeat' || $_GET['update'] == 'successPass') {
                                    echo '';
                                } else {
                                    echo 'active';
                                } ?>">
                                    <form action="../assets/php/myaccountUpdate.php" method="POST">
                                        <div class="row">

                                            <div class="col-12">



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
                                                    } else if ($_GET['error'] == 'email') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Please enter a valid Email Address<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['error'] == 'phone') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Please enter a valid Phone Number!<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['error'] == 'charlen') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Please enter a valid number of characters<br></span>';
                                                        echo "</div>";
                                                    }
                                                } else if (isset($_GET['update'])) {
                                                    if ($_GET['update'] == 'success') {
                                                        echo "<div class='alert alert-success' >";
                                                        echo '<span class="align-middle">Update Successful<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['update'] == 'roomAddedSuccessfully') {
                                                        echo "<div class='alert alert-success' >";
                                                        echo '<span class="align-middle">Property Added Successfully<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['update'] == 'confirmed') {
                                                        echo "<div class='alert alert-success col-12' >";
                                                        echo '<span class="align-middle">Visit Confirmed<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['update'] == 'visitDeleted') {
                                                        echo "<div class='alert alert-success col-12' >";
                                                        echo '<span class="align-middle">Visit Declined<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['update'] == 'visitCanceled') {
                                                        echo "<div class='alert alert-success col-12' >";
                                                        echo '<span class="align-middle">Visit Cancelled<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['update'] == 'propertyAddedSuccessfully') {
                                                        echo "<div class='alert alert-success col-12' >";
                                                        echo '<span class="align-middle">Property Added Successfully<br></span>';
                                                        echo "</div>";
                                                    }
                                                }
                                                ?>
                                            </div>

                                            <div class="col-12 mb-30">
                                                <h3 class="mb-0">Personal Profile</h3>
                                            </div>

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
                                                </div>
                                            </div>

                                            <div class="col-12 mb-30"><button type="submit" name="myaccountUpdate-submit" class="btn">Save Change</button></div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Profile Tab End -->

                                <!-- Visits Tab -->
                                <div id="visits-tab" class="tab-pane">
                                    <!-- <form action=""> -->
                                    <div class="col-12 mb-30">
                                        <h3 class="mb-0">Manage Visits</h3>
                                    </div>
                                    <div class="content">

                                        <form action="../assets/php/requestvisit.php" method="POST">
                                            <!-- Show visit on seller profile -->
                                            <?php
                                            if ($_SESSION['level'] == 2 || $_SESSION['level'] == 3) {
                                            ?>
                                                <?php
                                                // Get visits by Seller Id
                                                $visitsBySellerArray = $visitController->showVisitsBySellerId($_SESSION['id']);

                                                // For loop to get all
                                                for ($i = 0; $i < sizeof($visitsBySellerArray); $i++) {
                                                    $userById = $userController->showUserById($visitsBySellerArray[$i]['customer_id']);
                                                ?>

                                                    <div class="row">

                                                        <div class="col-6 pl-100">
                                                            <h4 class="mb-0 mt-10">Requested Visit</h4>
                                                            <h4 class="pl-40 mb-10">Time</h4>
                                                            <span><?php echo $visitsBySellerArray[$i]['datetime']; ?></span>
                                                        </div>
                                                        <div class="col-6 pl-120">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p class="mb-5 mt-10t"><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $userById[0]['fullname']; ?><br></p>
                                                                    <p class="mb-5 mt-10t"><b> Email: &nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $userById[0]['email']; ?></p>
                                                                    <p class="mb-5 mt-10t"><b>Phone:&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $userById[0]['phone']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button name="<?php echo "visitConfirm-submit" . $visitsBySellerArray[$i]['id']; ?>" type="submit" class="btn col-5" <?php if ($visitsBySellerArray[$i]['status'] == 1) {
                                                                                                                                                                                        echo "disabled";
                                                                                                                                                                                    } ?>>Confirm</button>
                                                            <button name="<?php echo "visitDecline-submit" . $visitsBySellerArray[$i]['id']; ?>" type="submit" class="btn col-5 float-right" <?php if ($visitsBySellerArray[$i]['status'] == 1) {
                                                                                                                                                                                                    echo "disabled";
                                                                                                                                                                                                } ?>>Decline</button>
                                                        </div>
                                                        <div class="col-12">
                                                            <hr>
                                                        </div>
                                                    </div>

                                                <?php } ?>

                                                <!-- Show visit on buyer profile -->
                                            <?php } else if ($_SESSION['level'] == 1) { ?>

                                                <?php
                                                $visitsBySellerArray = $visitController->showVisitsByCustomerId($_SESSION['id']);

                                                // For Loop to get all
                                                for ($i = 0; $i < sizeof($visitsBySellerArray); $i++) {
                                                    $userById = $userController->showUserById($visitsBySellerArray[$i]['customer_id']);
                                                ?>

                                                    <div class="row">

                                                        <div class="col-6 pl-100">
                                                            <h4 class="mb-0 mt-10">Requested Visit</h4>
                                                            <h4 class="pl-40 mb-10">Time</h4>
                                                            <span><?php echo $visitsBySellerArray[$i]['datetime']; ?></span>
                                                        </div>
                                                        <div class="col-6 pl-120">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p class="mb-5 mt-10t"><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $userById[0]['fullname']; ?><br></p>
                                                                    <p class="mb-5 mt-10t"><b> Email: &nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $userById[0]['email']; ?></p>
                                                                    <p class="mb-5 mt-10t"><b>Phone:&nbsp;&nbsp;&nbsp;&nbsp;</b><?php echo $userById[0]['phone']; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <?php if ($visitsBySellerArray[$i]['status'] == 1) { ?>
                                                                <h4 class="text-success d-flex mb-0 ml-110">Confirmed</h4>
                                                            <?php } else { ?>
                                                                <button name="<?php echo "visitCancel-submit" . $visitsBySellerArray[$i]['id']; ?>" type="submit" class="btn col-12">Cancel</button>
                                                            <?php } ?>

                                                        </div>
                                                        <div class="col-12">
                                                            <hr>
                                                        </div>
                                                    </div>

                                                <?php } ?>

                                            <?php } ?>
                                        </form>
                                    </div>
                                    <!-- </form> -->
                                </div>
                                <!-- Visits Tab End -->

                                <!-- Properties Tab -->
                                <div id="properties-tab" class="tab-pane">

                                    <div class="row">


                                        <!-- Foreach to cycle through rows in property -->
                                        <? foreach ($sellerProperties as $property) {
                                        $listingId = $property['property_id'];
                                        $propertyPhotos = $photoController->showAllPhotosByListingIdAndSequence1($listingId);
                                        ?>

                                        <!--Property start-->
                                        <div class="property-item col-md-6 col-12 mb-40">
                                            <div class="property-inner">
                                                <div class="image">
                                                    <a href="<?php echo 'single-properties-gallery.php' . "?propertyId=" . $property['property_id']; ?>"><img id="propertyPhotoPreview" src="<?php echo $propertyPhotos[0]['photos']; ?>" alt="" class="responsive image"></a>
                                                    <ul class="property-feature">
                                                        <li>
                                                            <span class="area"><img src="<? ?>" alt="">
                                                                <? echo $property['size_exterior']; ?> SqFt</span>
                                                        </li>
                                                        <li>
                                                            <span class="bed"><img src="../assets/images/icons/bed.png" alt="">
                                                                <? echo $property['bedrooms_total']; ?></span>
                                                        </li>
                                                        <li>
                                                            <span class="bath"><img src="../assets/images/icons/bath.png" alt="">
                                                                <? echo $property['bathroom_total']; ?></span>
                                                        </li>
                                                        <li>
                                                            <span class="parking"><img src="../assets/images/icons/parking.png" alt="">
                                                                <? echo $property['parking_space_total']; ?></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="content">
                                                    <div class="left">
                                                        <h3 class="title"><a href="single-properties.php">Property <?php echo $x++; ?></a></h3>
                                                        <span class="location"><img src="../assets/images/icons/marker.png" alt=""><?php echo $property['address'] . ", " . $property['city']; ?></span>
                                                    </div>
                                                    <div class="right">
                                                        <div class="type-wrap">
                                                            <span class="price"><?php
                                                                                $price = strlen($property['price']);
                                                                                $newPrice = null;

                                                                                switch (true) {
                                                                                    case $price == 3:
                                                                                        $newPrice = substr($property['price'], 0, 3) . "$";
                                                                                        echo $newPrice;
                                                                                        break;
                                                                                    case $price == 4:
                                                                                        $newPrice = substr($property['price'], 0, 4) . "$";
                                                                                        echo $newPrice;
                                                                                        break;
                                                                                    case $price == 5:
                                                                                        $newPrice = substr($property['price'], 0, 2) . "K";
                                                                                        echo $newPrice;
                                                                                        break;
                                                                                    case $price == 6:
                                                                                        $newPrice = substr($property['price'], 0, 3) . "K";
                                                                                        echo $newPrice;
                                                                                        break;
                                                                                    case $price == 7:
                                                                                        $million = substr($property['price'], 0, 1) . ".";
                                                                                        $hundreds = substr($property['price'], 1, 2) . "M";
                                                                                        $newPrice = $million . $hundreds;
                                                                                        echo $newPrice;
                                                                                        break;
                                                                                    case $price == 8:
                                                                                        $million = substr($property['price'], 0, 2) . ".";
                                                                                        $hundreds = substr($property['price'], 2, 2) . "M";
                                                                                        $newPrice = $million . $hundreds;
                                                                                        echo $newPrice;
                                                                                        break;
                                                                                    default:
                                                                                        echo "-";
                                                                                        break;
                                                                                } ?><span><?php if ($property['property_type'] == "Rent") {
                                                                                                echo "m";
                                                                                            } ?></span></span>
                                                            <span class="type">
                                                                <?php
                                                                if ($property['property_type'] == "Sale") {
                                                                    echo "For Sale";
                                                                } elseif ($property['property_type'] == "Rent") {
                                                                    echo "For Rent";
                                                                } else {
                                                                    echo "-";
                                                                }
                                                                ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?}?>
                                        <!--Property end-->

                                    </div>

                                </div>
                                <!-- End of Property tab -->

                                <!-- Password Tab -->
                                <div id="password-tab" class="tab-pane show 
                                <?php
                                if ($_GET['error'] == 'emptyFields' || $_GET['error'] == 'passwordCurrent' || $_GET['error'] == 'passwordMismatch' || $_GET['error'] == 'passwordLength' || $_GET['error'] == 'passwordRepeat' || $_GET['update'] == 'successPass') {
                                    echo 'active';
                                } else {
                                    echo '';
                                } ?>">
                                    <form action="../assets/php/changePassword.php" method="POST">

                                        <div class="row">
                                            <div class="col-12 mb-30">
                                                <h3 class="mb-0">Change Password</h3>
                                            </div>

                                            <div class="col-12">

                                                <!-- Validation Error Messages -->
                                                <?php
                                                if (isset($_GET['error'])) {
                                                    if ($_GET['error'] == 'emptyFieldsPass') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Please fill out empty fields<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['error'] == 'passwordCurrent') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Current Password does not Match<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['error'] == 'passwordMismatch') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">New Password and Confirm Password do not match<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['error'] == 'passwordLength') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Password Must be in-between 4 - 32 Characters<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['error'] == 'passwordRepeat') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Password Repeated<br></span>';
                                                        echo "</div>";
                                                    }
                                                } else if (isset($_GET['update'])) {
                                                    if ($_GET['update'] == 'successPass') {
                                                        echo "<div class='alert alert-success' >";
                                                        echo '<span class="align-middle">Password Updated Successfully<br></span>';
                                                        echo "</div>";
                                                    }
                                                }
                                                ?>
                                            </div>

                                            <div class="col-12 mb-30"><label for="current_password">Current Password</label><input name="passwordCurrent" type="password" id="current_password" value=""></div>
                                            <div class="col-12 mb-30"><label for="new_password">New Password</label><input name="passwordNew" type="password" id="new_password"></div>
                                            <div class="col-12 mb-30"><label for="confirm_new_password">Confirm New Password</label><input name="passwordConfirm" type="password" id="confirm_new_password"></div>

                                            <div class="col-12 mb-30"><button name="password-submit" type="submit" class="btn">Save Change</button></div>
                                        </div>
                                    </form>
                                </div>
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

<?php
} else {
    header('Location: login.php');
    exit();
}
?>