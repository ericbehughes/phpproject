<?php
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';

// Instantiate
$usersController = new UsersController();

//Registry Handler
if (isset($_POST['register-submit'])) {

    $usernameRegister = $_POST['usernameRegister'];
    $passwordRegister = $_POST['passwordRegister'];
    $fullnameRegister = $_POST['fullnameRegister'];
    $emailRegister = $_POST['emailRegister'];
    $dobRegister = $_POST['dobRegister'];
    $phoneRegister = $_POST['phoneRegister'];
    $addressRegister = $_POST['addressRegister'];
    $registerType = $_POST['registerType'];

    // Determine if the User is a Customer or Vendor
    if ($registerType == "Customer") {
        $level = 1;
    } elseif ($registerType == "Vendor") {
        $level = 2;
    }

    //Error Handlers
    //Validate empty fields
    if (empty($usernameRegister) || empty($passwordRegister) || empty($fullnameRegister) || empty($emailRegister) || empty($dobRegister) || empty($phoneRegister) || empty($addressRegister)) {
        header("Location: ../../views/register.php?error=emptyfields&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
        //Validate Username
    } else if (!preg_match("/^[a-zA-Z0-9]+$/", $usernameRegister)) {
        header("Location: ../../views/register.php?error=username&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
        //Validate Full Name
    } else if (!preg_match("/^[a-zA-Z\s]+$/", $fullnameRegister)) {
        header("Location: ../../views/register.php?error=fullname&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
        //Validate Email
    } else if (!filter_var($emailRegister, FILTER_VALIDATE_EMAIL) || !strpos($emailRegister, '.com') !== false) {
        header("Location: ../../views/register.php?error=emailaddress&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
        //Validate Phone Number
    } else if (!preg_match("/^[0-9]+$/", $phoneRegister)) {
        header("Location: ../../views/register.php?error=phone&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
        //Validate number of characters
    } else if (strlen($usernameRegister) > 10 || strlen($passwordRegister) > 32 || strlen($fullnameRegister) > 50 || strlen($emailRegister) > 100 || strlen($phoneRegister) > 10 || strlen($addressRegister) > 250 || strlen($usernameRegister) < 4 || strlen($passwordRegister) < 4 || strlen($fullnameRegister) < 4 || strlen($emailRegister) < 6 || strlen($phoneRegister) < 10 || strlen($addressRegister) < 10) {
        header("Location: ../../views/register.php?error=characterlength&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
    } else {
        // Check if user already exists in DB
        $results = $usersController->checkIfUserExists($usernameRegister, $emailRegister);
        //If User Already Exists
        if (!empty($results)) {
            header("Location: ../../views/register.php?error=existinguser&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
            exit();
            //If user doesn't already exist, add user to the DB
        } else {
            $usersController->createUser($usernameRegister, $passwordRegister, $fullnameRegister, $emailRegister, $dobRegister, $phoneRegister, $addressRegister, $level, 1);
            header("Location: ../../views/login.php?signup=success");
            exit();
        }
    }
} else {
    header("Location: ../../views/register.php?error=submit&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
    exit();
}
