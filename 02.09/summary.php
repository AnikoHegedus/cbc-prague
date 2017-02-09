<?php

require_once "./shared/database.php";

/*var_dump($_POST);
$db = new database();
$product = $db ->getproduct($_POST["id"]);
var_dump($product);*/


$db = new database();
$product = $db ->getproduct($_POST["id"]);

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

    <h1>Summary</h1>
<?php
 echo "You have the following item in your cart:" . "<br>";
    echo "Name: " . htmlspecialchars($product["name"]) . "<br>";
    echo "Price: " .htmlspecialchars($product["price"]) . "<br>";
    echo "Size: " . htmlspecialchars($product["size"]) . "<br>";
    echo "Color: " . htmlspecialchars($product["color"]) . "<br>";

?>

    <form action='checkout.php' method='post'>
    <input type='hidden' name='id' value='<?php echo htmlspecialchars($product["id"]); ?>'>
    <input type='submit' value='Checkout'>
    </form>
    
</body>
</html>