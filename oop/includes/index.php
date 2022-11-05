<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

spl_autoload_register('myAutoloader');
function myAutoloader($className)
{
    $path = 'classes/';
    $extension = '.class.php';
    $fullpath = $path . strtolower($className) . $extension;

    include_once $fullpath;

}