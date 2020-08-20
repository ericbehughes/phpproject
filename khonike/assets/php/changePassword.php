<?php
session_start();
//This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';

// Instantiate
$usersController = new UsersController();

if (isset($_POST['password-submit'])) {

    //Create Variables
    $id = $_SESSION['id'];
    $password = $_SESSION['password'];
    $passwordCurrent = $_POST['passwordCurrent'];
    $passwordNew = $_POST['passwordNew'];
    $passwordConfirm = $_POST['passwordConfirm'];


    
    //Empty Check
    if (empty($passwordCurrent) || empty($passwordNew) || empty($passwordConfirm)) {
        Header("Location: ../../views/my-account.php?error=emptyFieldsPass");
        //echo $password . $passwordCurrent;
        exit();
        // Correct password verification
    } else if ($passwordCurrent !== $password) {
        Header("Location: ../../views/my-account.php?error=passwordCurrent");
        exit();
        //New password and confirm password check
    } else if ($passwordNew !== $passwordConfirm) {
        Header("Location: ../../views/my-account.php?error=passwordMismatch");
        exit();
        //Character length check
    } else if (strlen($passwordConfirm) > 32 || strlen($passwordConfirm) < 4) {
        Header("Location: ../../views/my-account.php?error=passwordLength");
        exit();
    } else if ($passwordConfirm == $password) {
        Header("Location: ../../views/my-account.php?error=passwordRepeat");
        exit();
    } else {
        //Update DB with new password
        $usersController->updatePassword($passwordConfirm, $id);
        $_SESSION['password'] = $passwordConfirm;
        Header("Location: ../../views/my-account.php?update=successPass");
        exit();
    }
} else {
    Header("Location: ../../views/my-account.php?error=submit");
    exit();
}
