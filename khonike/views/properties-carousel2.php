<?php
session_start();
// This is used to display the error messages
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Includes
include_once __DIR__ . "/../controllers/propertycontroller.class.php";
include_once __DIR__ . "/../controllers/photocontroller.class.php";

// Instantiate
$propertyController = new PropertyController();
$photoController = new PhotoController();

// Calls to DB
$properties = $propertyController->showAllProperties();
$x = 1;
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

        <!-- Header -->
        <?php
        include_once('header.php');
        ?>

        <!--Page Banner Section start-->
        <div id="pageBanner" class="page-banner-section section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="page-banner-title">Properties</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Properties</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Banner Section end-->
        <?php
        //  print_r($sellerProperties); 
        ?>

        <!--Feature property section start-->
        <div class="property-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">

                <div class="row">


                    <!--Property Slider start-->
                    <div class="property-carousel section" data-row="2">

                        <!-- Foreach to cycle through rows in property -->
                        <? foreach ($properties as $property) {
                        $listingId = $property['property_id'];
                        $propertyPhotos = $photoController->showAllPhotosByListingIdAndSequence1($listingId);
                        ?>

                        <!--Property start-->
                        <div class="property-item col">
                            <div class="property-inner">
                                <div class="image">
                                    <a href="<?php echo 'single-properties-gallery.php' . "?propertyId=" . $property['property_id']; ?>"><img id="propertyPhotoPreview" src="<?php echo $propertyPhotos[0]['photos']; ?>" alt="" class="responsive image" height="265px"></a>
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
                    <!--Property Slider end-->

                </div>

            </div>
        </div>
        <!--Feature property section end-->

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