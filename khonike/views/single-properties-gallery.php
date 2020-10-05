<?php
session_start();

// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Includes
include_once __DIR__ . "/../controllers/propertycontroller.class.php";
include_once __DIR__ . "/../controllers/photocontroller.class.php";

// Instantiate
$propertyController = new PropertyController();
$photoController = new PhotoController();

// Get Property ID
$id = $_GET['propertyId'];

// Assign the array to a variable
$property = $propertyController->showPropertyById($id);
$propertyPhotos = $photoController->showAllPhotosByListingId($id);
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
    <script>
        function expandPhoto(imgs) {
            // Get the expanded image
            var expandImg = document.getElementById("expandedImg");
            // Get the image text
            var imgText = document.getElementById("imgtext");
            // Use the same src in the expanded image as the image being clicked on from the grid
            expandImg.src = imgs.src;
            // Use the value of the alt attribute of the clickable image as text inside the expanded image
            imgText.innerHTML = imgs.alt;
            // Show the container element (hidden with CSS)
            expandImg.parentElement.style.display = "block";
        }
    </script>
    <style>
        .imgContainer {
            float: left;
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
        <div class="page-banner-section section" style="background-image: url(../assets/images/bg/single-property-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="page-banner-title">Properties</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Friuli-Venezia Giulia</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Banner Section end-->



        <!--New property section start-->
        <div class="property-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 order-1 order-lg-2 mb-sm-50 mb-xs-50">
                        <div class="row">

                            <!--Property start-->
                            <div class="single-property col-12 mb-50">
                                <div class="property-inner">

                                    <div class="head">
                                        <div class="left">
                                            <h2 class="title"><img src="../assets/images/icons/marker.png" alt=""> <?php echo $property[0]['address'] . " " . $property[0]['city'] . ", " . $property[0]['province'] ?></h2>
                                            <span class="location"><?php echo $property[0]['structure']; ?></span>
                                        </div>
                                        <div class="right">
                                            <div class="type-wrap">
                                                <span class="price">$<?php
                                                                        $price = strlen($property[0]['price']);
                                                                        $newPrice = null;

                                                                        switch (true) {
                                                                            case $price == 3:
                                                                                $newPrice = substr($property[0]['price'], 0, 3) . "<span>M</span>";
                                                                                echo $newPrice;
                                                                                break;
                                                                            case $price == 4:
                                                                                $newPrice = substr($property[0]['price'], 0, 4) . "<span>M</span>";
                                                                                echo $newPrice;
                                                                                break;
                                                                            case $price == 5:
                                                                                $newPrice = substr($property[0]['price'], 0, 2) . "K";
                                                                                echo $newPrice;
                                                                                break;
                                                                            case $price == 6:
                                                                                $newPrice = substr($property[0]['price'], 0, 3) . "K";
                                                                                echo $newPrice;
                                                                                break;
                                                                            case $price == 7:
                                                                                $million = substr($property[0]['price'], 0, 1) . ".";
                                                                                $hundreds = substr($property[0]['price'], 1, 2) . "M";
                                                                                $newPrice = $million . $hundreds;
                                                                                echo $newPrice;
                                                                                break;
                                                                            case $price == 8:
                                                                                $million = substr($property[0]['price'], 0, 2) . ".";
                                                                                $hundreds = substr($property[0]['price'], 2, 2) . "M";
                                                                                $newPrice = $million . $hundreds;
                                                                                echo $newPrice;
                                                                                break;
                                                                            default:
                                                                                echo "-";
                                                                                break;
                                                                        } ?></span>
                                                <span class="type"><?php
                                                                    if ($property[0]['property_type'] == "Sale") {
                                                                        echo "For Sale";
                                                                    } elseif ($property[0]['property_type'] == "Rent") {
                                                                        echo "For Rent";
                                                                    } else {
                                                                        echo "-";
                                                                    }
                                                                    ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Photo Gallery -->
                                    <div class="container pr-0 pl-0">
                                        <!-- Close the image -->
                                        <!-- <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span> -->

                                        <!-- Expanded image -->
                                        <img class="mb-15 " id="expandedImg" style="width:100%" src="<?php echo $propertyPhotos[0]['photos']; ?>">

                                        <!-- Image text -->
                                        <div id="imgtext"></div>
                                    </div>

                                    <!-- Gallery Mini Images -->
                                    <div class="row">
                                        <div class="column">
                                            <?php for ($i = 0; $i < sizeof($propertyPhotos); $i++) { ?>
                                                <div class="imgContainer">
                                                    <img style="height: 120px; width: 180px; margin-left: 16px; margin-bottom: 16px;" src="<?php echo $propertyPhotos[$i]['photos']; ?>" alt="" onclick="expandPhoto(this);">
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    
                                    <!-- Amenities -->
                                    <div class="content">

                                        <div class="row mt-30 mb-30">

                                            <!-- For Loop to Display Amenities -->
                                            <div class="col-md-7 col-12">
                                                <h3>Amenities</h3>
                                                <ul class="amenities-list">
                                                    <?php
                                                    $features = $property[0]['features'];
                                                    $featuresArray = explode(" ", $features, -1);

                                                    for ($i = 0; $i < sizeof($featuresArray); $i++) {
                                                        echo "<li>" . $featuresArray[$i] . "</li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Property end-->

                            <!--Comment start-->
                            <!-- <div class="comment-wrap col-12">
                                <h3>3 Feedback</h3>

                                <ul class="comment-list">
                                    <li>
                                        <div class="comment">
                                            <div class="image"><img src="../assets/images/review/review-1.jpg" alt=""></div>
                                            <div class="content">
                                                <h5>Alvaro Santos</h5>
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <span class="time">10 August, 2018 | 10 Min ago</span>
                                                    <a href="#" class="reply">reply</a>
                                                </div>
                                                <div class="decs">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain borand I will give you a complete account of the system</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="child-comment">
                                            <li>
                                                <div class="comment">
                                                    <div class="image"><img src="../assets/images/review/review-2.jpg" alt=""></div>
                                                    <div class="content">
                                                        <h5>Silvia Anderson</h5>
                                                        <div class="d-flex flex-wrap justify-content-between">
                                                            <span class="time">10 August, 2018 | 25 Min ago</span>
                                                            <a href="#" class="reply">reply</a>
                                                        </div>
                                                        <div class="decs">
                                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain borand I will give you a complete account of the system</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment">
                                            <div class="image"><img src="../assets/images/review/review-3.jpg" alt=""></div>
                                            <div class="content">
                                                <h5>Nicolus Christopher</h5>
                                                <div class="d-flex flex-wrap justify-content-between">
                                                    <span class="time">10 August, 2018 | 35 Min ago</span>
                                                    <a href="#" class="reply">reply</a>
                                                </div>
                                                <div class="decs">
                                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain borand I will give you a complete account of the system</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <h3>Leave a Feedback</h3>

                                <div class="comment-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Name"></div>
                                            <div class="col-md-6 col-12 mb-30"><input type="email" placeholder="Email"></div>
                                            <div class="col-12 mb-30"><textarea placeholder="Message"></textarea></div>
                                            <div class="col-12"><button class="btn">send now</button></div>
                                        </div>
                                    </form>
                                </div>

                            </div> -->
                            <!--Comment end-->

                        </div>
                    </div>


                    <!-- Property Specifications -->
                    <div class="col-lg-4 col-12 order-2 order-lg-1 pr-30 pr-sm-15 pr-xs-15">

                        <!-- Property Options -->
                        <div class="">
                            <!-- If Admin or Seller -->
                            <?php if ($_SESSION['level'] == 2 || $_SESSION['level'] == 3) { ?>
                                <h4 class="sidebar-title"><span class="text">Property Options</span><span class="shape"></span></h4>
                                <button class="btn btn-block mb-15">Edit Property</button>
                                <button class="btn btn-block mb-25">Delete Property</button>
                            <?php } ?>

                            <h4 class="sidebar-title"><span class="text">Sepcifications</span><span class="shape"></span></h4>
                            <ul>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/areax.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Int: " . $property[0]['size_interior'] . " Sqft."; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/areax.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Ext: " . $property[0]['size_exterior'] . " Sqft."; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/bedroomsx.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Bedrooms: " . $property[0]['bedrooms_total']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/bathroom.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Bathrooms: " . $property[0]['bathroom_total']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/parkingx.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Parking: " . $property[0]['parking_space_total']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/structure.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Structure: " . $property[0]['structure']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/constructed.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Constructed On: " . $property[0]['constructed_date']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/exteriorfinish.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Finish: " . $property[0]['exterior_finish']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/floor.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Flooring: " . $property[0]['flooring_type']; ?></span></div>
                                </li>
                                <li class="mb-20">
                                    <div class="image"><img src="../assets/images/icons/stories.png" alt="" width="30px" height="30px"><span class="ml-15"><?php echo "Stories: " . $property[0]['stories_total']; ?></span></div>
                                </li>
                            </ul>


                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--New property section end-->

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