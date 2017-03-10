<?php
session_start();
require_once "./shared/database.php";

$db = new database();


if($_POST){
    try{

        $db->beginTransaction();
        $id_order = $db ->insertorder($_SESSION["userid"]);
        foreach($_SESSION["products"] as $id){
        $db -> insertproducttorder($id_order, $id);
        $db->commitTransaction();
        }
    } catch (PDOException $e){
        $db->rollBackTransaction();
    }
    $_SESSION["products"] = [];
    header("Location: index.php");
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