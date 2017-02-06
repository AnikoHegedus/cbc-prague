<?php
require_once "database.php";

if($_POST){
    
    $statement = $db -> prepare("INSERT INTO users (firstname, lastname) VALUES (?, ?)");
    $statement -> execute([$_POST["name"], $_POST["owner"]]);

    header("Location: albums.php?status=ok");
}

if(isset($_GET["status"]) && $_GET["status"] == "ok"){
    echo "ok";
}

$statement = $db -> prepare("SELECT id, firstname, lastname FROM users ORDER BY firstname, lastname");
$statement -> execute();
$owners = [];
foreach ($statement -> fetchAll() as $value){
    $owners[$value["id"]] = $value["firstname"] . " " . $value["lastname"]; 
}
?>

<form action="" method="post">
Name: <input name="name"><br>
Owner: <select name="owner">
<?php
foreach ($owners as $id => $name){
    echo "<option value=$id>$name</option>";
}
?>
</select>
 <!--<input name="owner">--><br>
<input type="submit">
</form>