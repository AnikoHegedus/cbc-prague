<?php
session_start();
require_once "./shared/database.php";


$db = new database();
echo " <h1>Summary</h1>";
echo htmlspecialchars($db->getUser($_SESSION["userid"])["name"]); 
echo ",you have the following item in your cart:" . "<br><br>";

foreach($_SESSION["products"] as $product){
    $product = $db ->getproduct($product);
    echo "Name: " . htmlspecialchars($product["name"]) . "<br>";
    echo "Price: " .htmlspecialchars($product["price"]) . "<br>";
    echo "Size: " . htmlspecialchars($product["size"]) . "<br>";
    echo "Color: " . htmlspecialchars($product["color"]) . "<br><br>";
}


if($_POST){
    $db ->insertorder(1);
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summary of purchase</title>
</head>
<body>

    <form action='checkout.php' method='post'>
   
    <input type='submit' value='Checkout' name="submit">
    </form>
    
</body>
</html>