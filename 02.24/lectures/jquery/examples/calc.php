<?php

/*echo $_POST["num1"];
echo $_POST["operand"];
echo $_POST["num2"];*/

if (isset($_POST["num1"]) && isset($_POST["operand"]) && isset($_POST["num2"])){
    if($_POST["operand"] == "+"){
        $result = $_POST["num1"] + $_POST["num2"];
        echo $result;
    } else if ($_POST["operand"] == "-"){
        $result = $_POST["num1"] - $_POST["num2"];
        echo $result;
    }
} else {
    header ("Location: calc.html");
    die();
}