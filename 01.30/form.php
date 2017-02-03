<?php

require_once("lib/data-functions.php");

ini_set("display_errors", 1);
/*header("Location: form.php");*/

$data=[
  "name" => $_POST["name"],
  "details" => $_POST["details"],
  "founded" => $_POST["founded"],
  "location" => $_POST["location"],
];


insert_data($data);
$index = get_index();

/*foreach($index as $id => $name){
    echo "<ul><li>$id<a href=list.php?id=$id=>" . " - " . "$name</a></li></ul>";
}*/


 /*if(isset($_GET["id"])){
  
  $data=get_data($_GET["id"]);
  foreach($data as $name=>$value){
    echo "$name=>$value<br>";
  }
 }else{
  $index = get_index();
  foreach($index as $id => $name){
    echo "<ul><li>$id<a href=list.php?id=$id>" . " - " . "$name</a></li></ul>";
  }

 }*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>


<a href="list.php">List</a>
<a href="detail.php">Detail</a>
    <h1>Company form</h1>

    <h3>Please fill out the form about your company</h3>
    <form action="" method="post">
  Company's name: <br>
  <input type="text" name="name" value="" id="name"/><br>
  
  Details of the activity: <br>
  <textarea rows="4" cols="50" name="details" value="" id="datails"></textarea><br>
  
  Year of foundation: <br><select name="founded" value="" id="founded">
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
  </select><br>

  <input type="radio" name="location" value="eu" id="from-eu" checked/><label for="from-eu"> EU </label><br>
  <input type="radio" name="location" value="non-eu" id="from-noneu"/> <label for="from-noneu"> Non-EU </label><br>
  <input type="submit" value="Submit"/>
</form>

</body>
</html>


