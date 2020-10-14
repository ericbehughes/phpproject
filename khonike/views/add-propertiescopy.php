<?php
session_start();

// This is used to display the error messages
// ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Includes
include_once __DIR__ . "/../controllers/propertycontroller.class.php";


// Instantiate
$propertyController = new PropertyController();
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
    </script>
    <style>
        #finishedBtn {
            display: block;
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
                        <h1 class="page-banner-title">Add Property</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Add Property</li>
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
                                if ($_GET['update'] == "propertyBasicSuccess" || $_GET['update'] == "propertyDetailSuccess" || $_GET['update'] == "propertyGallerySuccess" || $_GET['error'] == "propertyDetailSize" || $_GET['error'] == "propertyGallery" || $_GET['update'] == "propertyGalleryFinished") {
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
                            <li <?php // Rooms info TAB
                                if ($_GET['update'] == "propertyGalleryFinished") {
                                    echo 'class="working" ';
                                } else {
                                    echo "hidden";
                                }
                                ?>><a href="propertyAddRooms" data-toggle="tab">4. Room Specifications</a></li>
                        </ul>
                        <div class="add-property-form tab-content">
                            <!-- Tabs End -->

                            <!-- Validation Error Messages -->
                            <?php
                                            if (isset($_GET['error'])) {
                                                if ($_GET['error'] == 'propertyBasicStreet') {
                                                    echo "<div class='alert alert-danger' >";
                                                    echo '<span class="align-middle">Street must only include letters<br></span>';
                                                    echo "</div>";
                                                } else if ($_GET['error'] == 'propertyBasicCity') {
                                                    echo "<div class='alert alert-danger' >";
                                                    echo '<span class="align-middle">City must only include letters<br></span>';
                                                    echo "</div>";
                                                } else if ($_GET['error'] == 'propertyBasicNumber') {
                                                    echo "<div class='alert alert-danger' >";
                                                    echo '<span class="align-middle">Street Number must only include numbers<br></span>';
                                                    echo "</div>";
                                                } else if ($_GET['error'] == 'propertyBasicPostal') {
                                                    echo "<div class='alert alert-danger' >";
                                                    echo '<span class="align-middle">Please enter a valid Postal Code<br></span>';
                                                    echo "</div>";
                                                } else if ($_GET['error'] == 'propertyBasicPrice') {
                                                    echo "<div class='alert alert-danger' >";
                                                    echo '<span class="align-middle">Price must only include numbers<br></span>';
                                                    echo "</div>";
                                                } else if ($_GET['error'] == 'propertyBasicCharlength') {
                                                    echo "<div class='alert alert-danger' >";
                                                    echo '<span class="align-middle">Reduce Number of Characters<br></span>';
                                                    echo "</div>";
                                                } else if ($_GET['error'] == 'propertyDetailSize') {
                                                    echo "<div class='alert alert-danger' >";
                                                    echo '<span class="align-middle">Square Footage must be in-between 100 - 100,000<br></span>';
                                                    echo "</div>";
                                                } else if ($_GET['error'] == 'propertyBasicPrice') {
                                                    echo "<div class='alert alert-danger' >";
                                                    echo '<span class="align-middle">Price must only include numbers<br></span>';
                                                    echo "</div>";
                                                } else if ($_GET['error'] == 'propertyBasicCharlength') {
                                                    echo "<div class='alert alert-danger' >";
                                                    echo '<span class="align-middle">Reduce Number of Characters<br></span>';
                                                    echo "</div>";
                                                }
                                            }
                                            ?>
                        
                            <!-- Basic Info -->
                            <div class="tab-pane show <?php
                                                        if ($_GET['update'] == "propertyBasicSuccess" || $_GET['update'] == "propertyDetailSuccess" || $_GET['update'] == "propertyGallerySuccess" || $_GET['error'] == "propertyDetailSize" || $_GET['error'] == "propertyGallery" || $_GET['error'] == "propertyGalleryFinished" || $_GET['update'] == "propertyGalleryFinished") {
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
                                                <!-- Validation Error Messages -->
                                                <?php
                                                if (isset($_GET['error'])) {
                                                    if ($_GET['extension'] == 'error') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Extensions: JPEG - JPG - PNG - JFIF<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['size'] == 'error') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Size: Max 2MB<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['systemerror'] == 'error') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Size: Max 2MB<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['description'] == 'error') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Description: Letters - Spaces - 3-30 Characters<br></span>';
                                                        echo "</div>";
                                                    } else if ($_GET['sequence'] == 'error') {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Sequence: Numbers - Maximum 30 - Minimum 1<br></span>';
                                                        echo "</div>";
                                                    }
                                                } else if (isset($_GET['update'])) {
                                                    if ($_GET['update'] == 'propertyGallerySuccess') {
                                                        echo "<div class='alert alert-success' >";
                                                        echo '<span class="align-middle">Photo Added Successfully<br></span>';
                                                        echo "</div>";
                                                    }
                                                }
                                                ?>
                                            </div>

                                            <div class="col-6 mb-30">
                                                <label>Gallery Images</label>
                                                <!-- <div class="dropzone"></div> -->
                                                <!-- <div class='pe-7s-cloud-upload'></div> -->
                                                <input type="file" name="file" required>
                                            </div>

                                            <div class="col-3 mb-30">
                                                <label for="propertyPhotoDescription">Description</label>
                                                <input type="text" name="propertyPhotoDescription" value="<?= ($_GET['propertyPhotoDescription']); ?>" id="property_video" required>
                                            </div>

                                            <div class="col-3 mb-30">
                                                <label name="labler" id="labelid" for="property_video">Sequence Number</label>
                                                <input type="number" value="<?= ($_GET['propertyPhotoSequence']); ?>" name="propertyPhotoSequence" required>
                                            </div>

                                            <div class="nav d-flex justify-content-end col-12 mb-30 pl-15 pr-15">
                                                <!-- <a href="#detailed_info" data-toggle="tab" class="btn">Next</a> -->
                                            </div>

                                            <div class="nav d-flex justify-content-end col-12 mb-20 pl-15 pr-15">
                                                <button id="addGalleryBtn" class="property-submit btn" onclick="" name="propertyGallery-submit" type="submit">Add Photo</button>
                                            </div>

                                        </div>
                                    </form>

                                    <!-- Finished Button -->
                                    <?php if (is_null($_GET['error'])) { ?>
                                        <?php if ($_GET['update'] !== "propertyDetailSuccess") { ?>
                                        <div class="row">
                                            <div class="nav d-flex justify-content-end col-12"><button id="finishedButton" class="btn  pl-55 pr-60" onclick="location.href = 'add-properties.php?update=propertyGalleryFinished'">Finish</button></div>
                                        </div>
                                    <?php } ?>
                                    <?php } ?>

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
                                                    <li><input name="propertyAC" type="checkbox" id="air_condition" value="Air-Conditioning"><label for="air_condition">Air-Conditioning</label></li>
                                                    <li><input name="propertyBalcony" type="checkbox" id="balcony" value="Balcony"><label for="balcony">Balcony</label></>
                                                    <li><input name="propertyLift" type="checkbox" id="lift" value="Lift"><label for="lift">Lift</label></li>
                                                    <li><input name="propertyPool" type="checkbox" id="pool" value="Pool"><label for="pool">Pool</label></li>
                                                    <li><input name="propertyJacuzzi" type="checkbox" id="Jacuzzi" value="Jacuzzi"><label for="Jacuzzi">Jacuzzi</label></li>
                                                    <li><input name="propertySmart" type="checkbox" id="Smart-House" value="Smart-House"><label for="Smart-House">Smart-House</label></li>
                                                    <li><input name="propertyTheatre" type="checkbox" id="Home-Theatre" value="Home-Theatre"><label for="Home-Theatre">Home-Theatre</label></li>
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


                            <!-- Room Specifications -->

                            <!-- Obtain Recently Added Property -->
                            <?php
                            if ($_GET['update'] == "propertyGalleryFinished") {

                                // Get Max Property ID
                                $arrayMaxId = $propertyController->showPropertyByMaxId();
                                $maxId = $arrayMaxId[0]['MAX(property_id)'];
                                $_SESSION['maxId'] = $maxId;

                                // Get Number of Rooms by Property ID
                                $property = $propertyController->showRoomsById($maxId);
                                $numberOfBedrooms = $property[0]['bedrooms_total'];
                                $numberOfBathrooms = $property[0]['bedrooms_total'];

                            }
                            ?>
                            <!-- Determine Tab -->
                            <div class="tab-pane <?php
                                                    if ($_GET['update'] == "propertyGalleryFinished") {
                                                        echo 'active';
                                                    } else {
                                                        echo '';
                                                    }
                                                    ?>" id="addRoomProperties">
                                <div class="tab-body">

                                    <form action="../assets/php/addProperty.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">

                                            <!-- Validation Error Messages -->
                                            <div class="col-12 mb-30">

                                                <?php
                                                if (isset($_GET['bedroomWidthError'])) {
                                                    if ($_GET['bedroomWidthError'] == 1) {
                                                        echo "<div class='alert alert-danger' >";
                                                        echo '<span class="align-middle">Bedroom 1 Width Must be in-between 1 & 50<br></span>';
                                                        echo "</div>";
                                                    }
                                                }
                                                ?>
                                            </div>

                                            <!-- Bedroom Input Fields -->
                                            <?php for ($i = 1; $i <= $numberOfBedrooms; $i++) { ?>
                                                <div class="container">
                                                    <div class="row">

                                                        <div class="col-md-3 text-center mt-40 mb-40">
                                                            <h3>Bedroom <?php echo $i; ?></h3>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Bedroom Width</label>
                                                            <input class="mb-20" type="number" min="10" max="50" name="<?php echo "bedroomWidth" . $i; ?>" required>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Bedroom Length</label>
                                                            <input class="mb-20" type="number" min="10" max="50" name="<?php echo "bedroomLength" . $i; ?>" required>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Level</label>
                                                            <select class="nice-select" name="<?php echo "bedroomLevel" . $i; ?>" required>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            <?php } ?>

                                            <!-- Bathroom Input Fields -->
                                            <?php for ($i = 1; $i <= $numberOfBathrooms; $i++) { ?>
                                                <div class="container">
                                                    <div class="row">

                                                        <div class="col-md-3 text-center mt-40 mb-40">
                                                            <h3>Bathroom <?php echo $i; ?></h3>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Bathroom Width</label>
                                                            <input class="mb-20" type="number" min="10" max="50" name="<?php echo "bathroomWidth" . $i; ?>" required>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Bathroom Length</label>
                                                            <input class="mb-20" type="number" min="10" max="50" name="<?php echo "bathroomLength" . $i; ?>" required>
                                                        </div>

                                                        <div class="col-md-3">
                                                            <label>Level</label>
                                                            <select class="nice-select" name="<?php echo "bathroomLevel" . $i; ?>" required>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            <?php } ?>

                                            <div class="nav d-flex justify-content-end col-12 mb-20 pl-15 pr-15">
                                                <button id="" class="property-submit btn" onclick="" name="propertyRooms-submit" type="submit">Add Rooms</button>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- Room Specifications -->


                        </div>
                        <!-- End of Tab Panes -->

                    </div>
                </div>
            </div>
        </div>
        <!--Add Properties section end-->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>

</html>