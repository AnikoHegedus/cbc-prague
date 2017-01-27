<?php

$a = [1, 2, 3, 4];
var_dump($a);

$form = [
    "first-name" => "John",
    "last-name" => "Foo",
    "email" => "foo@bar.net",
    "country" => "US",
    "age" => 25,
];

$form["city"]= "Prague";
echo $form["age"];
echo $form["country"];
var_dump($form);
/*$flipped = array_flip($form);
var_dump($flipped);*/

if ($form["city"] == "Prague") {
    echo "Prague is cool";
} else {
    echo "You should visit Prague one day!";
}
 echo "<hr>";
/*shuffle($form);
var_dump($form);*/

$b = [];

for($i = 2; $i<10; $i+=2){
    $b[$i] = $i;
    echo "bla " . "and also bla <br>";
}

var_dump($b);
echo "<br>";

foreach($form as $key=>$value){
    echo $key . ":" . " " . $value;
    echo "<br>";
}

foreach($b as $value){
    echo $value;
   
}
 echo "<br>";

foreach($b as $key){
    echo $key;
    echo "<br>";
}

$products = [
    "puppet" => 300,
    "car" => 4000,
    "dish" => 400,
    "table" => 30,
];

echo "<br>";
$sum = 0;

foreach ($products as $value){
    $sum += $value;
    echo "The sum is: " . $sum . "<br>";
}

echo "<hr>";

$order = [
        [
            "item" => "curtain",
            "price" => 300,
        ],
        [
            "item" => "pan",
            "price" => 400,
        ],
        [
            "item" => "carpet",
            "price" => 3300,
        ],
        [
            "item" => "cabinet",
            "price" => 1500,
        ],
];

foreach($order as $prod){
    echo $prod["item"] . "<br>";
    echo $prod["price"] . "<br>";
}

echo "<hr>";