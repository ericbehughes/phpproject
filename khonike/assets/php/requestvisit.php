<?php
session_start();

//This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';

// Instantiate
$visitController = new VisitController();
$propertyController = new PropertyController();

if (isset($_POST['visit-submit'])) {

    //Create Variables
    $requestedDate = $_POST['dateTimeSelector'];
    $user_id = $_SESSION['id'];
    $username = $_SESSION['username'];
    $fullname = $_SESSION['fullname'];
    $email = $_SESSION['email'];
    $dob = $_SESSION['dob'];
    $phone = $_SESSION['phone'];
    $address = $_SESSION['address'];
    $level = $_SESSION['level'];
    $status = $_SESSION['status'];
    $currentPropertyId = $_SESSION['currentPropertyId'];

    // Obtain Seller Id
    $property = $propertyController->showPropertyById($currentPropertyId);
    $seller_id = $property[0]['seller_id'];

    // Get all Customer requests
    $customerRequests = $visitController->showVisitsByCustomerIdAndPropertyId($user_id, $currentPropertyId);

    // Validation
    if (sizeof($customerRequests) > 0) {
        header("Location: ../../views/single-properties-gallery.php?update=error&visitAlreadyRequested=1&propertyId=" . $currentPropertyId);
        exit();
    } else {
        // Add to Database
        $visitController->createVisit($user_id, $seller_id, $currentPropertyId, $requestedDate, 0);
        header("Location: ../../views/single-properties-gallery.php?update=success&propertyId=" . $currentPropertyId);
        exit();
    }
}


// VISITS BUTTONS Submit

for ($i = 0; $i < 50; $i++) {
    if (isset($_POST['visitConfirm-submit' . $i])) {
        $visitController->updateVisitStatusById(1, $i);
        header("Location: ../../views/my-account.php?update=confirmed");
        exit();
    }

    if (isset($_POST['visitDecline-submit' . $i])) {
        $visitController->deleteVisit($i);
        header("Location: ../../views/my-account.php?update=visitDeleted");
        exit();
    }

    if (isset($_POST['visitCancel-submit' . $i])) {
        $visitController->deleteVisit($i);
        header("Location: ../../views/my-account.php?update=visitCanceled");
        exit();
    }
}
