<?php

class address{
	protected $name = null;
   	protected $street = null;
    protected $house_nr = null;
    protected $city = null;
   	protected static $country = "hu";
    protected $postal_code = null;

    public static $local_country = null;

    public static function setLocalCountry($local_country){
        static::$local_country = $local_country;
    } 

    public static function isLocal(){
        if(static::$country == static::$local_country){
            return true;
        }else{
            return false;
        }

    }
   
}

$cim = new address();
address::setLocalCountry("de");
$local=address::isLocal();

var_dump($local);


