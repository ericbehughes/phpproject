<?php
include '../includes/autoloader.inc.php';

// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$dbCheck = new UsersView();


//Login Handler
if (isset($_POST['login-submit'])) {

    $usernameLogin = $_POST['usernameLogin'];
    $passwordLogin = $_POST['passwordLogin'];

    //Error Handlers
    //Validate empty fields
    if (empty($usernameLogin) || empty($passwordLogin)) {
        header("Location: ../loginView.php?error=emptyfields&user=" . $usernameLogin);
        exit();
        //Validate Username
    } else if (!preg_match("/^[a-zA-Z0-9]+$/", $usernameLogin)) {
        header("Location: ../loginView.php?error=username&user=" . $usernameLogin);
        exit();
        //Validate Number of Characters
    } else if (strlen($usernameLogin) > 10 || strlen($usernameLogin) < 4 ||  strlen($passwordLogin) < 4 || strlen($passwordLogin) > 32) {
        header("Location: ../loginView.php?error=charlength&user=" . $usernameLogin);
        exit();
    } else {
        // Check if user exists in DB
        $results = $dbCheck->showUserByUsernameAndPassword($usernameLogin, $passwordLogin);
        //Invalid Login
        if (!empty($results)) {
            session_start();
            $_SESSION['id'] = $results[0]['id'];
            $_SESSION['username'] = $results[0]['username'];
            $_SESSION['fullname'] = $results[0]['fullname'];
            $_SESSION['email'] = $results[0]['email'];
            $_SESSION['dob'] = $results[0]['dob'];
            $_SESSION['phone'] = $results[0]['phone'];
            $_SESSION['address'] = $results[0]['address'];
            $_SESSION['level'] = $results[0]['level'];
            $_SESSION['level'] = $results[0]['status'];

            header("Location: ../loginView.php?login=success");
            exit();
            //Valid login
        } else {
            header("Location: ../loginView.php?error=invalidlogin&user=" . $usernameLogin);
            //session_unset();
            //session_destroy();
            exit();
        }
    }

} else {
    header("Location: ../loginView.php?error=submit");
    exit();
}


?>