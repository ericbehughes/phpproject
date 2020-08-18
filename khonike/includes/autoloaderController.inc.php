<?php 

spl_autoload_register('myAutoloaderController');

function myAutoLoaderController($className) {

    $path = "../../controllers/";
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;

    include_once $fullPath;
}