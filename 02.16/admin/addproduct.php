<?php
require_once "../shared/database.php";

if($_POST){
    $db = new database();
    $db->insertproduct($_POST["name"], $_POST["price"], $_POST["size"], $_POST["color"]);
    header("Location: products.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>Add product</h2>
    <form action="" method="post">
        Name:
        <input type="text" name="name"><br>
        Price:
        <input type="text" name="price"><br>
        Size:
        <input type="text" name="size"><br>
        Color:
        <input type="text" name="color"><br>
        <input type="submit">
    </form>   
    <a href="products.php">Products</a>
</body>
</html>