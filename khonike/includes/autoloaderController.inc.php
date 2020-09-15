<?php 

spl_autoload_register('myAutoloaderController');

// Only works from assets/Php
function myAutoLoaderController($className) {

    $path = "../../controllers/";
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;

    include_once $fullPath;
}