<?php
include '../includes/autoloader.inc.php';


// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



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

    //Error Handlers
    //Validate empty fields
    if (empty($usernameRegister) || empty($passwordRegister) || empty($fullnameRegister) || empty($emailRegister) || empty($dobRegister) || empty($phoneRegister) || empty($addressRegister)) {
        header("Location: ../login-register.php?error=emptyfields&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
        //Validate Username
    } else if (!preg_match("/^[a-zA-Z0-9]+$/", $usernameRegister)) {
        header("Location: ../login-register.php?error=username&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
        //Validate Full Name
    } else if (!preg_match("/^[a-zA-Z\s]+$/", $fullnameRegister)) {
        header("Location: ../login-register.php?error=fullname&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
        //Validate Email
    } else if (!filter_var($emailRegister, FILTER_VALIDATE_EMAIL) || !strpos($emailRegister, '.com') !== false) {
        header("Location: ../login-register.php?error=emailaddress&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
        //Validate Phone Number
    } else if (!preg_match("/^[0-9]+$/", $phoneRegister)) {
        header("Location: ../login-register.php?error=phone&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
        //Validate number of characters
    } else if (strlen($usernameRegister) > 10 || strlen($passwordRegister) > 32 || strlen($fullnameRegister) > 50 || strlen($emailRegister) > 100 || strlen($phoneRegister) > 10 || strlen($addressRegister) > 250) {
        header("Location: ../login-register.php?error=characterlength&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
        exit();
    } else {
        // Check if user already exists in DB
        $results = $usersController->checkIfUserExists($usernameRegister, $emailRegister);
        //If User Already Exists
        if (!empty($results)) {
            header("Location: ../login-register.php?error=existinguser&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
            exit();
            //If user doesn't already exist, add user to the DB
        } else {
            $usersController->createUser($usernameRegister, $passwordRegister, $fullnameRegister, $emailRegister, $dobRegister, $phoneRegister, $addressRegister, 1, 1);
            header("Location: ../login-register.php?signup=success");
            exit();
        }
    }
} else {
    header("Location: ../login-register.php?error=submit&user=" . $usernameRegister . "&name=" . $fullnameRegister . "&mail=" . $emailRegister . "&dob=" . $dobRegister . "&phone=" . $phoneRegister . "&address=" . $addressRegister);
    exit();
}
