<?php

define("NAME", "Bootcamp");
echo NAME;

$my_array = array();

$var2 = is_array($my_array);
var_dump($var2);

function my_concat($var1, $var2){
 return $var1 . " " . $var2;
};

my_concat("Coding", "Bootcamp");

class product{
    public $size;
    protected $color;
    protected $price;
    const VERSION = '1.0';

    public function __set($name, $value){
        return $this->name = $value;
    }

    public function __get($color){
        return $this->color = $color;
    }

    public function __toString()
    {
        return $this->size;
    }

    public static function getVersion(){
        return self::VERSION;
    }
};

$my_clothes = new product();
$my_clothes->meret = "XL";
$my_clothes->product::getVersion();

var_dump($my_clothes);
