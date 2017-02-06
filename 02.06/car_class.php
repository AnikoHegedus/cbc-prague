<?php
require_once "vehicle_class.php";

class car extends vehicle {
    public $wheels_count = 4;
    public function change_color($color){
        $this -> color = $color;
    }
}

$my_car = new car;
$my_car -> change_color("pink");
var_dump($my_car);

?>