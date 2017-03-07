<?php

class animal{
    
    protected $hungry = true;

    public function eat(){
        $this->hungry = false;
    }
}

class dog extends animal {
    use feedable, understandsCommands;
}

class wolf extends animal {
    
}

trait feedable{

    protected $owners_mood = "unhappy";

    public function beFed(){
        $this->hungry = false;
        $this->owners_mood = "happy";
    }    
}

trait understandsCommands{
    public function fetch(){

    }

    public function sit(){

    }
}


class baby{
    protected $hungry = true;
    use feedable;
}

$ben = new dog();
$ben->eat();

$fang = new wolf();
$fang -> eat();

var_dump($ben);
var_dump($fang);