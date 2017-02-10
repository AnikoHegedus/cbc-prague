<?php

$course_name= "Coding Bootcamp";

$ratings = [
    "user642" => 69, 
    "user214" => 95, 
    "user013" => 82
    ];



function print_rating($rating){
    echo $rating . " " . "%";
}

$user_names = array(
    'user642' => 'Bob',
    'user214' => 'Stuart',
    'user013' => 'Kevin'
);

$user_name = $user_names["user214"];

function get_username($user_id){
    global $user_names;
    return $user_names[$user_id];
}

foreach($ratings as $key=>$rating){
    echo get_username($key) . " gave the movie a " . $rating . "% rating<br>";
}