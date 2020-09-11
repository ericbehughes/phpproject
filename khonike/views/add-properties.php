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

        <!-- Header -->
        <?php
        include_once('header.php');
        ?>

        <!--Page Banner Section start-->
        <div class="page-banner-section section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="page-banner-title">Add Properties</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Add Properties</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Page Banner Section end-->

        <!--Add Properties section start-->
        <div class="add-properties-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="add-property-wrap col">

                        <!-- TABS -->
                        <ul class="add-property-tab-list nav mb-50">
                            <li <?php //Basic info TAB
                                if ($_GET['update'] == "propertyBasicSuccess" || $_GET['update'] == "propertyDetailSuccess" || $_GET['update'] == "propertyGallerySuccess" || $_GET['error'] == "propertyDetailSize" || $_GET['error'] == "propertyGallery") {
                                    echo 'hidden';
                                } else {
                                    echo 'class="working" ';
                                }
                                ?>><a href="#basic_info" data-toggle="tab">1. Basic Information</a></li>
                            <li <?php // Detailed info TAB
                                if ($_GET['update'] == "propertyBasicSuccess" || $_GET['error'] == "propertyDetailSize") {
                                    echo 'class="working" ';
                                } else {
                                    echo "hidden";
                                }
                                ?>><a href="#detailed_info" data-toggle="tab">2. Detailed Information</a></li>
                            <li <?php // Gallery info TAB
                                if ($_GET['update'] == "propertyDetailSuccess" || $_GET['error'] == "propertyGallery" || $_GET['update'] == "propertyGallerySuccess") {
                                    echo 'class="working" ';
                                } else {
                                    echo "hidden";
                                }
                                ?>><a href="#gallery_video" data-toggle="tab">3. Gallery & Video</a></li>
                        </ul>

                        <div class="add-property-form tab-content">

                            <!-- Basic Info -->
                            <div class="tab-pane show <?php
                                                        if ($_GET['update'] == "propertyBasicSuccess" || $_GET['update'] == "propertyDetailSuccess" || $_GET['update'] == "propertyGallerySuccess" || $_GET['error'] == "propertyDetailSize" || $_GET['error'] == "propertyGallery") {
                                                            echo '';
                                                        } else {
                                                            echo 'active';
                                                        }
                                                        ?>" id="basic_info">
                                <div class="tab-body">

                                    <form name="form-basic" action="../assets/php/addProperty.php" method="POST">
                                        <div class="row">

                                            <div class="col-md-4 col-12 mb-30">
                                                <label for="property_number">Street Number</label>
                                                <input name="propertyNumber" max="99999" type="number" id="" value="<?= ($_GET['propertyNumber']); ?>" required>
                                            </div>

                                            <div class="col-md-4 col-12 mb-30">
                                                <label for="property_street">Street Name</label>
                                                <input name="propertyStreet" type="text" id="property_address" value="<?= ($_GET['propertyStreet']); ?>" required>
                                            </div>

                                            <div class="col-md-4 col-12 mb-30">
                                                <label for="property_city">City</label>
                                                <input name="propertyCity" type="text" id="property_address" value="<?= ($_GET['propertyCity']); ?>" required>
                                            </div>

                                            <div class="col-md-4 col-12 mb-30">
                                                <label for="property_Province">Province</label>
                                                <select class="nice-select" name="propertyProvince" id="" required>
                                                    <option value="QC">QC</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4 col-12 mb-30">
                                                <label for="property_Postal">Postal Code</label>
                                                <input name="propertyPostal" placeholder="A1A1A1" type="text" id="property_address" pattern="[A-Za-z][0-9][A-Za-z][0-9][A-Za-z][0-9]" value="<?= ($_GET['propertyPostal']); ?>" required>
                                            </div>

                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Property Type</label>
                                                <select name="propertyType" class="nice-select">
                                                    <option>Rent</option>
                                                    <option>Sale</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Structure</label>
                                                <select name="propertyStructure" class="nice-select">
                                                    <option>Apartment</option>
                                                    <option>Condominium</option>
                                                    <option>House</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4 col-12 mb-30">
                                                <label for="property_price">Price <span>(CAD)</span></label>
                                                <input name="propertyPrice" type="number" min="100" id="property_price" value="<?= ($_GET['propertyPrice']); ?>" required>
                                            </div>

                                            <div class="col-md-4 col-12 mb-30">
                                                <label for="property_area">Constructed Date</label>
                                                <input name="propertyConstructedDate" max="2020-10-09" type="date" id="property_area" value="<?= ($_GET['propertyConstructedDate']); ?>" required>
                                            </div>

                                            <!-- <div class="nav d-flex justify-content-end col-12 mb-30 pl-15 pr-15">
                                                 <a href="#gallery_video" data-toggle="tab" class="btn">Next</a> 
                                            </div> -->


                                            <div class="nav d-flex justify-content-end col-12 mb-30 pl-15 pr-15">
                                                <button name="propertyBasic-submit" class="property-submit btn">Confirm</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- Basic Info End -->


                            <!-- Gallery -->
                            <div class="tab-pane <?php
                                                    if ($_GET['update'] == "propertyDetailSuccess" || $_GET['error'] == "propertyGallery" || $_GET['update'] == "propertyGallerySuccess") {
                                                        echo 'active';
                                                    } else {
                                                        echo '';
                                                    }
                                                    ?>" id="gallery_video">
                                <div class="tab-body">

                                    <form action="../assets/php/addProperty.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">


                                            <div class="col-12 mb-30">
                                                <div class="alert alert-danger" >
                                                    <!-- Validation Error Messages -->
                                                    <?php
                                                    if (isset($_GET['error'])) {
                                                        if ($_GET['error'] == 'propertyGallery') {
                                                            echo '<span class="align-middle">Description: Letters, Spaces, Max Length 50<br></span>';
                                                            echo '<span class="align-middle">Sequence: Numbers, Max Number 30<br></span>';
                                                            echo '<span class="align-middle">Extensions: Jpeg, jpg, png, jfif<br></span>';
                                                            echo '<span class="align-middle">Size: Max 1MB<br></span>';
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="col-6 mb-30">
                                                <label>Gallery Images</label>
                                                <!-- <div class="dropzone"></div> -->
                                                <!-- <div class='pe-7s-cloud-upload'></div> -->
                                                <input multiple type="file" name="file" required>
                                            </div>

                                            <div class="col-3 mb-30">
                                                <label for="propertyPhotoDescription">Description</label>
                                                <input type="text" name="propertyPhotoDescription" value="<?= ($_GET['propertyPhotoDescription']); ?>" id="property_video" required>
                                            </div>

                                            <div class="col-3 mb-30">
                                                <label for="property_video">Sequence Number</label>
                                                <input type="number" value="<?= ($_GET['propertyPhotoSequence']); ?>" name="propertyPhotoSequence" required>
                                            </div>

                                            <div class="nav d-flex justify-content-end col-12 mb-30 pl-15 pr-15">
                                                <!-- <a href="#detailed_info" data-toggle="tab" class="btn">Next</a> -->
                                            </div>

                                            <div class="nav d-flex justify-content-end col-12 mb-30 pl-15 pr-15">
                                                <button class="property-submit btn" name="propertyGallery-submit" type="submit">Add Photo</button>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- Gallery End -->


                            <!-- Detailed Info -->
                            <div class="tab-pane <?php
                                                    if ($_GET['update'] == "propertyBasicSuccess" || $_GET['error'] == "propertyDetailSize") {
                                                        echo 'active';
                                                    } else {
                                                        echo "";
                                                    }
                                                    ?>" id="detailed_info">
                                <div class="tab-body">

                                    <form action="../assets/php/addProperty.php" method="POST">
                                        <div class="row">
                                            <!-- <div class="col-12 mb-30">
                                                <label for="property_description">Description</label>
                                                <textarea id="property_description"></textarea>
                                            </div> -->

                                            <!-- Parking Spaces -->
                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Parking Spaces</label>
                                                <select name="propertyParking" class="nice-select">
                                                    <option value="1">1 Car</option>
                                                    <option value="2">2 Cars</option>
                                                    <option value="3">3 Cars</option>
                                                    <option value="4">4 Cars</option>
                                                    <option value="5">5 Cars</option>
                                                    <option value="6">6 Cars</option>
                                                    <option value="7">7 Cars</option>
                                                    <option value="8">8 Cars</option>
                                                    <option value="9">9 Cars</option>
                                                    <option value="10">10 Cars</option>
                                                    <option value="11">11 Cars</option>
                                                    <option value="12">12 Cars</option>
                                                </select>
                                            </div>

                                            <!-- Bedrooms -->
                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Bedrooms</label>
                                                <select name="propertyBedrooms" id="bedroomList" class="nice-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>

                                            <div id="inputArea"></div>

                                            <!-- Bathrooms -->
                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Bathrooms</label>
                                                <select name="propertyBathrooms" class="nice-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>

                                            <!-- Baths -->
                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Baths</label>
                                                <select name="propertyBaths" class="nice-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>
                                            </div>

                                            <!-- Stories -->
                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Stories</label>
                                                <select name="propertyStories" class="nice-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>

                                            <!-- Exterior Finish -->
                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Exterior Finish</label>
                                                <select name="propertyExteriorFinish" class="nice-select">
                                                    <option>Brick</option>
                                                    <option>Vinyl</option>
                                                    <option>Aluminum</option>
                                                    <option>Stucco</option>
                                                </select>
                                            </div>

                                            <!-- Flooring Type -->
                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Flooring Type</label>
                                                <select name="propertyFlooringType" class="nice-select">
                                                    <option>Hardwood</option>
                                                    <option>Vinyl</option>
                                                    <option>Ceramic</option>
                                                    <option>Carpet</option>
                                                </select>
                                            </div>

                                            <!-- Size Exterior -->
                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Exterior Square Ft.</label>
                                                <input value="<?= ($_GET['propertySizeExterior']); ?>" name="propertySizeExterior" type="number">
                                            </div>

                                            <!-- Size Interior -->
                                            <div class="col-md-4 col-12 mb-30">
                                                <label>Interior Squrare Ft.</label>
                                                <input value="<?= ($_GET['propertySizeInterior']); ?>" name="propertySizeInterior" type="text">
                                            </div>

                                            <!-- Features -->
                                            <div class="col-12 mb-30">
                                                <h4>Other Features</h4>
                                                <ul class="other-features">
                                                    <li><input name="propertyAC" type="checkbox" id="air_condition" value="Air Conditioning"><label for="air_condition">Air Conditioning</label></li>
                                                    <li><input name="propertyBalcony" type="checkbox" id="balcony" value="Balcony"><label for="balcony">Balcony</label></>
                                                    <li><input name="propertyLift" type="checkbox" id="lift" value="Lift"><label for="lift">Lift</label></li>
                                                    <li><input name="propertyPool" type="checkbox" id="pool" value="Pool"><label for="pool">Pool</label></li>
                                                    <li><input name="propertyJacuzzi" type="checkbox" id="Jacuzzi" value="Jacuzzi"><label for="Jacuzzi">Jacuzzi</label></li>
                                                    <li><input name="propertySmart" type="checkbox" id="Smart House" value="Smart House"><label for="Smart House">Smart House</label></li>
                                                    <li><input name="propertyTheatre" type="checkbox" id="Home Theatre" value="Home Theatre"><label for="Home Theatre">Home Theatre</label></li>
                                                </ul>
                                            </div>


                                            <div class="nav d-flex justify-content-end col-12 mb-30 pl-15 pr-15">
                                                <button name="propertyDetails-submit" class="property-submit btn" type="submit">Confirm</button>
                                            </div>






                                        </div>
                                    </form>


                                </div>
                            </div>
                            <!-- Detailed Info End -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Add Properties section end-->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>

</html>