<?php

if (isset($_POST["a"]) && isset($_POST["b"])){
    $result = $_POST["a"] + $_POST["b"];
    echo $result;
}else{
    echo "Hello world!";
}

