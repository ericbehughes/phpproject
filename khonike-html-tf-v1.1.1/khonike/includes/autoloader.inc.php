<?php 

spl_autoload_register('myAutoloader');

function myAutoLoader($className) {

    $path = "";
    $ext = ".class.php";
    $fullPath = $path . $className . $ext;

    include_once $fullPath;
}