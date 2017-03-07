<?php

class animal{
    public function sleep(){
        echo "Falls asleep <br>";
    }
}

class cat extends animal {
    public function sleep(){
        echo "Purr-purr<br>";
        parent::sleep();
    }
}

$oliver = new cat();
$oliver -> sleep();

