<?php
session_start();
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';

// Instantiate
$propertyController = new PropertyController();
$PhotoController = new PhotoController();

// Basic Info
if (isset($_POST['propertyBasic-submit'])) {

    // Create Variables
    $propertyNumber = $_POST['propertyNumber'];
    $propertyStreet = $_POST['propertyStreet'];
    $propertyCity = $_POST['propertyCity'];
    $propertyProvince = $_POST['propertyProvince'];
    $propertyPostal = $_POST['propertyPostal'];
    $propertyType = $_POST['propertyType'];
    $propertyStructure = $_POST['propertyStructure'];
    $propertyPrice = $_POST['propertyPrice'];
    $propertyConstructedDate = $_POST['propertyConstructedDate'];
    $propertyAddress = null;


    // Store them in Sessions
    $_SESSION['propertyNumber'] = $propertyNumber;
    $_SESSION['propertyStreet'] = $propertyStreet;
    $_SESSION['propertyCity'] = $propertyCity;
    $_SESSION['propertyProvince'] = $propertyProvince;
    $_SESSION['propertyPostal'] = $propertyPostal;
    $_SESSION['propertyType'] = $propertyType;
    $_SESSION['propertyStructure'] = $propertyStructure;
    $_SESSION['propertyPrice'] = $propertyPrice;
    $_SESSION['propertyConstructedDate'] = $propertyConstructedDate;

    // Empty Check
    if (empty($propertyNumber) || empty($propertyStreet) || empty($propertyCity) || empty($propertyPostal) || empty($propertyPrice) || empty($propertyConstructedDate)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicEmptyFields&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property Number Validation
    } else if (!preg_match("/^[0-9]+$/", $propertyNumber)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicNumber&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property Street Validation
    } else if (!preg_match("/^[a-zA-Z]+$/", $propertyStreet)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicStreet&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property City Validation
    } else if (!preg_match("/^[a-zA-Z]+$/", $propertyCity)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicCity&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property Postal Validation
    } else if (!preg_match("/^[a-zA-Z0-9]+$/", $propertyPostal)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicPostal&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property Price Validation
    } else if (!preg_match("/^[0-9]+$/", $propertyPrice)) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicPrice&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
        // Property String Length
    } else if (strlen($propertyNumber) > 5 || strlen($propertyStreet) > 25 || strlen($propertyStreet) < 3 || strlen($propertyCity) > 25 || strlen($propertyCity) < 3 || strlen($propertyPostal) > 6 || $propertyPrice < 100) {
        Header("Location: ../../views/add-properties.php?error=propertyBasicCharlength&propertyNumber=" . $propertyNumber . "&propertyStreet=" . $propertyStreet . "&propertyCity=" . $propertyCity . "&propertyPostal=" . $propertyPostal . "&propertyPrice=" . $propertyPrice . "&propertyConstructedDate=" . $propertyConstructedDate);
        exit();
    } else {
        // Combine the Street Number and Street to create the Address Variable
        $propertyAddress = $propertyNumber  . " " . $propertyStreet;
        $_SESSION['propertyAddress'] = $propertyAddress;
        // Redirect to next tab
        Header("Location: ../../views/add-properties.php?update=propertyBasicSuccess");
    }
}

    // Detailed Info
    if (isset($_POST['propertyDetails-submit'])) {

        // Create Variables
        $propertyParking = $_POST['propertyParking'];
        $propertyBedrooms = $_POST['propertyBedrooms'];
        $propertyBathrooms = $_POST['propertyBathrooms'];
        $propertyBaths = $_POST['propertyBaths'];
        $propertyStories = $_POST['propertyStories'];
        $propertyExteriorFinish = $_POST['propertyExteriorFinish'];
        $propertyFlooringType = $_POST['propertyFlooringType'];
        $propertySizeExterior = $_POST['propertySizeExterior'];
        $propertySizeInterior = $_POST['propertySizeInterior'];
        $propertyBalcony = $_POST['propertyBalcony'];
        $propertyLift = $_POST['propertyLift'];
        $propertyPool = $_POST['propertyPool'];
        $propertyJacuzzi = $_POST['propertyJacuzzi'];
        $propertySmart = $_POST['propertySmart'];
        $propertyTheatre = $_POST['propertyTheatre'];
        
    
        // Store Variables From Session
        $propertyNumber = $_SESSION['propertyNumber'];
        $propertyStreet = $_SESSION['propertyStreet'];
        $propertyCity = $_SESSION['propertyCity'];
        $propertyProvince =  $_SESSION['propertyProvince'];
        $propertyPostal = $_SESSION['propertyPostal'];
        $propertyType = $_SESSION['propertyType'];
        $propertyStructure =$_SESSION['propertyStructure'];
        $propertyPrice = $_SESSION['propertyPrice'];
        $propertyConstructedDate =  $_SESSION['propertyConstructedDate'];
        $propertyAddress = $_SESSION['propertyAddress'];
        // $propertyBalcony = $_SESSION['propertyBalcony'];
        // $propertyLift = $_SESSION['propertyLift'];
        // $propertyPool = $_SESSION['propertyPool'];
        // $propertyJacuzzi = $_SESSION['propertyJacuzzi'];
        // $propertySmart = $_SESSION['propertySmart'];
        // $propertyTheatre = $_SESSION['propertyTheatre'];
    
    
        // Property Size Validation
        if (!preg_match("/^[0-9]+$/", $propertySizeExterior) || $propertySizeExterior < 100 || $propertySizeExterior > 100000 || !preg_match("/^[0-9]+$/", $propertySizeInterior) || $propertySizeInterior < 100 || $propertySizeInterior > 100000) {
            Header("Location: ../../views/add-properties.php?error=propertyDetailSize&propertySizeExterior=" . $propertySizeExterior . "&propertySizeInterior=" . $propertySizeInterior);
            exit();
        } else {
            // Create Features Variable
            $propertyFeatures = $propertyBalcony . " " . $propertyLift . " " . $propertyPool . " " . $propertyJacuzzi . " " . $propertySmart . " " . $propertyTheatre;

            // Add Property
            $propertyController->createProperty($propertyFeatures, $propertyParking, $propertyPrice, $propertyType, null, $propertyStructure, $propertyBathrooms, $propertyBedrooms, null, $propertyConstructedDate, $propertyExteriorFinish, $propertyFlooringType, $propertyBaths, null, $propertyStories, $propertySizeExterior, $propertySizeInterior, $propertyAddress, $propertyCity, $propertyProvince, $propertyPostal, null, null, null, null, $_SESSION['id']);

            // Get Max Property ID
            $arrayMaxId = $propertyController->showPropertyByMaxId();
            $maxId = $arrayMaxId[0]['MAX(property_id)'];
            $_SESSION['maxId'] = $maxId;
            Header("Location: ../../views/add-properties.php?update=propertyDetailSuccess");
        }
    
    
    }

    // Gallery
    if (isset($_POST['propertyGallery-submit'])) {

        // Create Variables
        $file = $_FILES['file'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];
        $fileType = $file['type'];
        $timestamp = time();

        $propertyPhotoDescription = $_POST['propertyPhotoDescription'];
        $propertyPhotoSequence = $_POST['propertyPhotoSequence'];

        // Grab Extentension
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        // Allowed File Types
        $allowed = array('jpeg', 'jpg', 'png', 'jfif');

        // Extension Validation
        if (!in_array($fileActualExt, $allowed)) {
            Header("Location: ../../views/add-properties.php?error=propertyGallery&Extension");
            exit();
            // System Error Validation
        } else if (!$fileError == 0) {
            Header("Location: ../../views/add-properties.php?error=propertyGallery&systemerror");
            exit();
            // Size Validation
        } else if ($fileSize > 1000000) {
            Header("Location: ../../views/add-properties.php?error=propertyGallery&size");
            exit();
            // Description Validation
        } else if (!preg_match("/^[a-zA-Z ]+$/", $propertyPhotoDescription) || strlen($propertyPhotoDescription) > 30 || strlen($propertyPhotoDescription) < 3) {
            Header("Location: ../../views/add-properties.php?error=propertyGallery&propertyPhotoDescription=" . $propertyPhotoDescription . "&propertyPhotoSequence=" . $propertyPhotoSequence);
            exit();
            // Sequence Validation
        } else if (!preg_match("/^[0-9]+$/", $propertyPhotoSequence) || $propertyPhotoSequence > 30) {
            Header("Location: ../../views/add-properties.php?error=propertyGallery&propertyPhotoSequence=" . $propertyPhotoSequence . "&propertyPhotoDescription=" . $propertyPhotoDescription);
            exit();
        } else {
            // Upload File to Folder
            $fileNewName = $timestamp . $fileActualExt;
            $fileDestination = "../images/uploads/" . $fileNewName;
            move_uploaded_file($fileTmpName,$fileDestination);
            echo "File uploaded";

            // Get Max Property ID
            // $arrayMaxId = $propertyController->showPropertyByMaxId();
            // $maxId = $arrayMaxId[0]['MAX(property_id)'];
            // $_SESSION['maxId'] = $maxId;

            // Upload to DB
            $PhotoController->createPhoto($_SESSION['maxId'], $propertyPhotoSequence, $propertyPhotoDescription, $fileDestination);
            echo 'properly added to DB';
            Header("Location: ../../views/add-properties.php?update=propertyGallerySuccess&propertyPhotoSequence=" . $propertyPhotoSequence);
        }

    }
    
    


