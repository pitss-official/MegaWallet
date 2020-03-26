<?php
//class classLoader{
//    public static loadAll($directory_path){
//
//    }
//}
//print_r(glob("Classes/*.php"));
//set_include_path('Classes/');
////foreach (glob("Classes/*.php") as $filename)
////{
////    echo "included ".$filename;
////    include $filename;
////}
require_once "classes/System.php";
require_once "classes/Environment.php";
include "classes/Parser.php";
spl_autoload_register( function ($class_name) {
    $CLASSES_DIR = __DIR__ . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR;
    $file = $CLASSES_DIR . $class_name . '.php';
    if( file_exists( $file ) ) require_once $file;
} );