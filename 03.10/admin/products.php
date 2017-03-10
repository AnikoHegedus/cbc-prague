<?php

require_once "../shared/database.php";

$db = new database();
$products = $db->getProducts();

foreach($products as $product){
    echo "Name: " . htmlspecialchars($product["name"]) . "<br>";
    echo "Price: " .htmlspecialchars($product["price"]) . "<br>";
    echo "Size: " . htmlspecialchars($product["size"]) . "<br>";
    echo "Color: " . htmlspecialchars($product["color"]) . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="addproduct.php">Back to form</a>
</body>
</html>