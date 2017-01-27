<?php
/*echo "Get: ";
var_dump($_GET);

echo "Post: ";
var_dump($_POST);*/

ini_set("display_errors", 1);

/*header("Location: forms.php");*/

if(!empty($_POST)){
    echo "Adding product: " . $_POST["product"];
   
}

if(!isset($_POST["color"])){
    echo "Please choose a color!";
}


if(isset($_POST["color"]) && $_POST["color"]=="Black"){
    echo ", black";
}else {
    echo ", white";
}

if(isset($_POST["bar"]) && $_POST["bar"] == "on"){
    echo " and we're going to celebrate in a bar";
}
if(isset($_POST["film"]) && $_POST["film"] == "on"){
    echo " and we're going to watch a film tonight";
}
if(isset($_POST["sleep"]) && $_POST["sleep"] == "on"){
    echo " and we're going to have a good night sleep";
}

if(isset($_POST["remarks"])){
    echo "<br>" . "Remarks: " . $_POST["remarks"];
}



?>

<form action="" method="post" enctype="multipart/form-data">

Product: <input type="text" name="product">
<br>
Are you hungry? <input type="checkbox" name="hungry" checked>
<br>
What do you want to do tonight?<br>
<input type="checkbox" name="bar" id="bar"><label for="bar">Bar</label><br>
<input type="checkbox" name="film" id="film"><label for="film">Film</label><br>
<input type="checkbox" name="sleep" id="sleep"><label for="sleep">Sleep</label><br>

Color: <br>
<input type="radio" name="color" value="black" id="color-black"><label for="color-black">Black </label><br>
<input type="radio" name="color" value="white" id="color-white"><label for="color-white">White</label><br>

Country:
<select name="country">
    <option value="CZ">Czech Republic</option>
    <option value="BR">Banana Republic</option>
    <option value="KR">Kiwi Republic</option>
    <option value="OR">Orange Republic</option>
</select>
<br>
Remarks: <br>
<textarea name="remarks" cols="30" rows="10"></textarea><br>

<input type="submit" value= "Submit this"> 

</form>