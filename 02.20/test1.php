<?php

class address{
	protected $name = null;
   	protected $street = null;
    protected $house_nr = null;
    protected $city = null;
   	protected $country = "hu";
    protected $postal_code = null;

    public static $local_country = null;

    public static function setLocalCountry($local_country){
        static::$local_country = $local_country;
    } 

    public function isLocal(){
        if($this -> country == static::$local_country){
            return true;
        }else{
            return false;
        }

    }
   
}

$cim = new address();
address::setLocalCountry("de");
$local=$cim->isLocal();

var_dump($local);


