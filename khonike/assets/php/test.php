<?php
session_start();
// This is used to display the error messages
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../../includes/autoloaderController.inc.php';

// Click on finish
// Finish adds "update=propertyGalleryFinished"
// if($_GET['update'] == propertyGalleryFinished)
// Search database for most recently added row and find how many rooms it has
// Store Number
// if(stored number == 1) etc. then
// Write html and INPUTS which will be given respective names
// On form submit Validate
// Add rooms to DB
// 
// 
