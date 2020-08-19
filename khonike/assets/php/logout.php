<?php
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Reset the Sessions
session_start();
session_unset();
session_destroy();
header('Location: ../../views/index.php');


?>