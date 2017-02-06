<?php
require_once "db.php";


if (!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["code"])){
    $statement = $db -> prepare("INSERT INTO users (firstname, lastname, code) VALUES (?, ?, ?)");
    $statement -> execute([$_POST["firstname"], $_POST["lastname"], $_POST["code"]]); 
    
    header("Location: thanks.html");
    
} 
 
/*if (isset($_GET["status"]) && $_GET["status"] == "ok") {
        echo "Thank you for filling out the form. <br>";*/
else{
    echo "Please fill out all fields of the form";
}      



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script
			  src="http://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous">
    </script>
    
</head>
<body>
<h1></h1>
    <form action="" method="post">
    First name:<input type="text" name="firstname"><br>
    Last name:<input type="text" name="lastname"><br>
    Code: <input type="text" name="code"><br>
    <button type="submit" class="button">submit</button>
    </form>
    <script>
        $(".button").onclick(function(){
            alert("button was clicked");
        });
    </script>

</body>
</html>
