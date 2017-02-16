<?php

$x = 5;
if($x == 123){

}


if(isset($_POST["foo"])){
    echo htmlspecialchars($_POST["foo"]);
}
?>

<form action="" method="post">
    Foo <br>
    <input type=text name="foo"><br>
    <input type=submit><br>
</form>