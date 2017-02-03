<?php
require_once("lib/data-functions.php");
ini_set("display_errors", 1);

if(isset($_GET["id"])){
  
 $data=get_data($_GET["id"]);
 foreach($data as $key=>$value){
    echo "<p>" . $key . ": " . $value . "</p>";
    
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <a href="form.php"><button>Back to the main page</button></a>
</body>
</html>