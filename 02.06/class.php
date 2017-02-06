<?php

class car{
    public function __construct($color){
        $this->color = $color;
    }
    private $manufacturer = null;
    public $model = null;
    public $price = null;
    public $nr_of_wheels = 4;
    public $fuel_type = "petrol";
    public $owner = "manufacturer";
    public $current_speed = 0;

    public function speed_up(){
        $this->current_speed += 10;
    }
    public function brake(){
        $this->current_speed -= 10;
    }
    public function be_bought(){
        $this->$owner = $new_owner;
    }
    public function getManufacturer(){
        return $this->manufacturer;
    }
    public function setManufacturer($manufacturer){
        $this->manufacturer = $manufacturer;
    }
}

$my_car = new car("red");
$my_car -> price = "2000 EUR";
$my_car -> speed_up();
$my_car -> speed_up();
$my_car -> owner = "me";
$my_car -> setManufacturer("Skoda");
var_dump($my_car);