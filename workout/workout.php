<?php

echo "workout";
echo "<hr>";
$course_name = "Coding Bootcamp";
$my_name = "Aniko";
$result = 11-3;
$instructors = array("Jan", "Daniel", "Michal", "Jakub");

class bootcamp {
    public $instructors = array("Jan", "Daniel", "Michal", "Jakub");
}

function greet_me(){
    echo "Good morning, Prague";
}

greet_me();

$my_greeting = "Good morning, " . $my_name;
echo "<hr>";

echo $my_greeting;

echo "<hr>";

sort($instructors);

foreach($instructors as $name){
    echo greet_someone($name) . "<br>";
}

function greet_someone($name){
        return "Good morning, " . $name;
}

