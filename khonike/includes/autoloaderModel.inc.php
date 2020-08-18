<?php 

spl_autoload_register('myAutoloaderModel');

function myAutoLoaderModel($className) {

    $path = "../../models/";
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;

    include_once $fullPath;
}