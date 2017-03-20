<?php

var_dump(__FILE__);
var_dump(__DIR__);
$info = pathinfo(__FILE__);
var_dump($info);

$product_1_folder = __DIR__ . "/media/product/1";

$contents = scandir($product_1_folder);

// open a folder for reading
$dir_handle = operndir($product_1_folder);
var_dump($dir_handle);

// go through the filesize
while($file = readdir($dir_handle)){
    var_dump($file);
}

// close reading the folder
closedir($dir_handle);