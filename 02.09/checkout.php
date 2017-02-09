<?php

require_once "./shared/database.php";

$db = new database();


if($_POST){
    $id_order = $db ->insertorder(1);
    $db -> insertproducttorder($id_order, $_POST["id"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>Thanks for shopping at My eshop!</p>
</body>
</html>