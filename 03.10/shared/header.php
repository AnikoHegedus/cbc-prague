<?php

require_once "./shared/user.php";
require_once "./shared/database.php";

$db = new database();
$user = new user($db);

$name = $user->getName();
if($name){
    echo "Hi, " . htmlspecialchars($user->getName());
    echo "<br><a href='logout.php'>Logout</a><br>";
    echo count($_SESSION["products"]);
    echo "<br><a href='summary.php'>Order summary</a>";
}else{
    echo "<a href='signup.php'>Sign up</a><br>";
    echo "<a href='login.php'>Log in</a>";
}