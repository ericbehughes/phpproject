<?php
session_start();
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';

// Instantiate
$usersController = new UsersController();

//Registry Handler
if (isset($_POST['myaccountUpdate-submit'])) {

    //Creating Variables from POST
    $id = $_POST['idUpdate'];
    $usernameUpdate = $_POST['usernameUpdate'];
    $passwordUpdate = $_POST['passwordUpdate'];
    $fullnameUpdate = $_POST['fullnameUpdate'];
    $emailUpdate = $_POST['emailUpdate'];
    $dobUpdate = $_POST['dobUpdate'];
    $phoneUpdate = $_POST['phoneUpdate'];
    $addressUpdate = $_POST['addressUpdate'];
    $levelUpdate = $_POST['levelUpdate'];
    $statusUpdate = $_POST['statusUpdate'];

    //Error Handlers
    //Validate empty fields
    if (empty($usernameUpdate) || empty($passwordUpdate) || empty($fullnameUpdate) || empty($emailUpdate) || empty($dobUpdate) || empty($phoneUpdate) || empty($addressUpdate)) {
        header("Location: ../../views/my-account.php?error=emptyfields&user=" . $usernameUpdate . "&name=" . $fullnameUpdate . "&mail=" . $emailUpdate . "&dob=" . $dobUpdate . "&phone=" . $phoneUpdate . "&address=" . $addressUpdate);
        exit();
        //Validate Username
    } else if (!preg_match("/^[a-zA-Z0-9]+$/", $usernameUpdate)) {
        header("Location: ../../views/my-account.php?error=username&user=" . $usernameUpdate . "&name=" . $fullnameUpdate . "&mail=" . $emailUpdate . "&dob=" . $dobUpdate . "&phone=" . $phoneUpdate . "&address=" . $addressUpdate);
        exit();
        //Validate Full Name
    } else if (!preg_match("/^[a-zA-Z\s]+$/", $fullnameUpdate)) {
        header("Location: ../../views/my-account.php?error=fullname&user=" . $usernameUpdate . "&name=" . $fullnameUpdate . "&mail=" . $emailUpdate . "&dob=" . $dobUpdate . "&phone=" . $phoneUpdate . "&address=" . $addressUpdate);
        exit();
        //Validate Email
    } else if (!filter_var($emailUpdate, FILTER_VALIDATE_EMAIL) || !strpos($emailUpdate, '.com') !== false) {
        header("Location: ../../views/my-account.php?error=email&user=" . $usernameUpdate . "&name=" . $fullnameUpdate . "&mail=" . $emailUpdate . "&dob=" . $dobUpdate . "&phone=" . $phoneUpdate . "&address=" . $addressUpdate);
        exit();
        //Validate Phone Number
    } else if (!preg_match("/^[0-9]+$/", $phoneUpdate)) {
        header("Location: ../../views/my-account.php?error=phone&user=" . $usernameUpdate . "&name=" . $fullnameUpdate . "&mail=" . $emailUpdate . "&dob=" . $dobUpdate . "&phone=" . $phoneUpdate . "&address=" . $addressUpdate);
        exit();
        //Validate number of characters
    } else if (strlen($usernameUpdate) > 10 || strlen($passwordUpdate) > 32 || strlen($fullnameUpdate) > 50 || strlen($emailUpdate) > 100 || strlen($phoneUpdate) > 10 || strlen($addressUpdate) > 250 || strlen($usernameUpdate) < 4 || strlen($passwordUpdate) < 4 || strlen($fullnameUpdate) < 4 || strlen($emailUpdate) < 6 || strlen($phoneUpdate) < 10 || strlen($addressUpdate) < 10) {
        header("Location: ../../views/my-account.php?error=charlen&user=" . $usernameUpdate . "&name=" . $fullnameUpdate . "&mail=" . $emailUpdate . "&dob=" . $dobUpdate . "&phone=" . $phoneUpdate . "&address=" . $addressUpdate);
        exit();
    } else {
        // Update the User using the ID
        $usersController->updateUserById($usernameUpdate, $passwordUpdate, $fullnameUpdate, $emailUpdate, $dobUpdate, $phoneUpdate, $addressUpdate, $levelUpdate, $statusUpdate, $id);

        //Change the session variables
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $usernameUpdate;
        $_SESSION['password'] = $passwordUpdate;
        $_SESSION['fullname'] = $fullnameUpdate;
        $_SESSION['email'] = $emailUpdate;
        $_SESSION['dob'] = $dobUpdate;
        $_SESSION['phone'] = $phoneUpdate;
        $_SESSION['address'] = $addressUpdate;
        $_SESSION['level'] = $levelUpdate;
        $_SESSION['status'] = $statusUpdate;
        header("Location: ../../views/my-account.php?update=success");
        exit();
    }
} else {
    header("Location: ../../views/my-account.php?error=submit&user=" . $usernameUpdate . "&name=" . $fullnameUpdate . "&mail=" . $emailUpdate . "&dob=" . $dobUpdate . "&phone=" . $phoneUpdate . "&address=" . $addressRegister);
    exit();
}
