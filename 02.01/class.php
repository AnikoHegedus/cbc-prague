<?php

class car{
    public $color = null;
    public $manufacturer = null;
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
}

$my_car = new car;
$my_car -> price = "2000 EUR";
$my_car -> speed_up();
$my_car -> speed_up();
$my_car -> owner = "me";
var_dump($my_car);