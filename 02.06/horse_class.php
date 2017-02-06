<?php
require_once "vehicle_class.php";

class horse extends vehicle {
    public $wheels_count = 0;
    public $is_fed = false;

    public function feed(){
        $this->is_fed = true;
        
    }
}

$my_horse = new horse;
$my_horse -> feed();
var_dump($my_horse);