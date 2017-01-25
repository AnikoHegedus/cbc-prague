<?php

require_once("var_show.php");

$variable = "Aniko";

$fruit = array(
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
);

$fruit_colors = array(
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>

<!--<?php  val_show($variable); ?>
<?php  var_show($variable); ?>-->
<?php  var_show($fruit); ?>
<!--<?php  var_dump($fruit); ?>
<?php  var_show($fruit_colors); ?>-->

<?php  

/*$array = [];
var_show($array);

$array[] = "fruit";
var_show($array);

$array["my key"] = "my value";
var_show($array);

$array[]="next";
var_show($array);

$array[123] = "a value";
var_show($array);

var_show($array[123]);*/

$max_value = max($fruit);
var_show($max_value);

/*$cars_i_want = array(
    'Porshe',
    'Ferrari',
    'Aston Martin',
    'Lamborghini',
    'Bugatti'
);

$cars_i_have = array(
    'Ferrari',
    'Lamborghini'
);

$cars_i_dont_have_yet = array_diff($cars_i_want, $cars_i_have);
var_show($cars_i_dont_have_yet);

shuffle($cars_i_dont_have_yet);
var_show($cars_i_dont_have_yet);

$first_car = array_shift($cars_i_dont_have_yet);
var_show($first_car);*/

$cars_i_want = array(
    'Porshe' => 2000000,
    'Ferrari' => 2500000,
    'Aston Martin' => 2800000,
    'Lamborghini' => 3500000,
    'Bugatti' => 16000000
);

$cars_my_wife_wants = array(
    'Smart' => 320000,
    'Mercedes' => 620000,
    'Toyota' => 480000,
    'Ford Mustang' => 1200000
);
$cars_i_cant_stand = array(
    'Smart'
);

$array_merged = array_merge($cars_i_want, $cars_my_wife_wants);
var_show($array_merged);

arsort($array_merged);
var_show($array_merged);

$cars_i_cant_stand = array_diff_key($array_merged, array_flip($cars_i_cant_stand));
var_show($cars_i_cant_stand);

$keys = array_keys($cars_i_cant_stand);
var_show($keys);

$my_car = array_pop($keys);
var_show($my_car);

foreach($fruit as $one_fruit) {
    echo $one_fruit;
}

?>
    
<hr style ="clear:both" />

<?php 

foreach($cars_i_cant_stand as $price){
    echo ($price);

}

?>


</body>
</html>