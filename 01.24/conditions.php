<?php 
$height = 181;

function tall($height){
    if ($height > 180){
        echo "tall";
    } elseif ($height > 160) {
        echo "average";
    }else {
        echo "short";
    }
}

tall($height);



$os = "Linux";

switch ($os)
{
    case "windows":
    echo "Edge";
    break;
    case "Linux":
    echo "Firefox";
    break;
    case "Mac":
    echo "Safari";
    break;
    default: 
    echo "Please use Chrome";
    break;
}


/*$age = 35;
$gender = "male";
$emplyed = true;

if ($age > 35)
if($employed)
if($age <= 18)
if($age < 12 && $gender == "female")
if($age>=60 && $employed && $gender == "female")
if (($gender == "male" && $age > 20) || (!$employed && $gender == "female" && $age > 25)*/

?>