<?php
$prices = array(
    1 => 59.4,
    2 => 12.6,
    3 => 130,
);

var_dump($prices);

asort($prices);

var_dump($prices);

class customer{
    public function __construct($name){
        $this->name = $name;
    }
}

$my_customer = new customer('John Doe');
var_dump($my_customer);