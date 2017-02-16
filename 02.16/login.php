<?php
require_once "./shared/database.php";
$db = new database();


if($_POST){
    $user = $db->getUserByEmail($_POST["email"]);
    if(empty($user)){
        echo "Wrong user";
    }elseif (password_verify($_POST["password"], $user["password"])){
        session_start();
        $_SESSION["userid"] = $user["id"];
        header("Location: index.php");
    }else{
        echo "Wrong password";
    }
}


?>
<form action="" method="post">
    Email:<br>
    <input type="text" name="email"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <input type="submit">
</form>