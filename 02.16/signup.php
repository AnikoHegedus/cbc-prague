<?php
require_once "./shared/database.php";
$db = new database();


if($_POST){
    $userid = $db -> insertuser($_POST["name"], $_POST["email"], $_POST["password"]);
    session_start();
    $_SESSION["userid"] = $userid;
    header("Location: index.php");
}
?>
<form action="" method="post">
    Name:<br>
    <input type="text" name="name"><br>
    Email:<br>
    <input type="text" name="email"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <input type="submit">
</form>