<?php
require_once("lib/data-functions.php");
ini_set("display_errors", 1);

  $index = get_index();
  foreach($index as $id => $name){
    echo "<ul><li>$id<a href=detail.php?id=$id>" . " - " . "$name</a></li></ul>";

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List</title>
</head>
<body>
   <a href="form.php"><button>Back to the main page</button></a>
</body>
</html>
