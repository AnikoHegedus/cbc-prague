<?php

class vehicle {
    public $wheels_count = null;
    public $color = null;
    public $avg_speed = null;
    public function travel($distance){
        $avg_speed = max(1, $this->avg_speed);
        return $distance / $avg_speed;
    }
}

$my_vehicle = new vehicle();
$my_vehicle -> avg_speed = 20;
$my_vehicle -> travel(60);
var_dump($my_vehicle);

