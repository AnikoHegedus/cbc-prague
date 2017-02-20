<?php
require_once "test.php";

$object = new address();

class delivery{
    public $address = null;
    public $is_sent = false;
    public $sent_at = null;
    public $is_delivered = false;
    public $delivered_at = null;

    public function __construct($object){
       $this -> address = $object;
    }

    public function getPrice(){
        if (address::isLocal()){
            echo "0";
        }else{
            echo "8.99";
        }
    }

    public function send(){
        $this->is_sent = true;
        $this->sent_at = date('Y-m-d H:i:s');
    }
    public function delivered($datetime){
        $this->is_delivered = true;
        $this->delivered_at = $datetime;
    }
}

$new=new delivery($object);
$new->send();
$new->delivered(date('Y-m-d H:i:s'));
var_dump($new);




