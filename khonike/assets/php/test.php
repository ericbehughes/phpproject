<?php
session_start();
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';


// Testing MAX property ID
$propertyController = new PropertyController();
$maxId = $propertyController->showPropertyByMaxId();

print_r($maxId);

echo $maxId[0]['MAX(property_id)'];
