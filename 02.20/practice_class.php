<?php


class address{
	protected $name = null;
   	protected $street = null;
    protected $house_nr = null;
    protected $city = null;
   	protected $country = null;
    protected $postal_code = null;

    protected static $local_country = null;

    public static function setLocalCountry(){
        static::$local_country = $local_country;
    }

    public function __construct($array){
        foreach($array as $key=>$value){
            $this->$key = $value;
        }
    }
}


$my_arr1 = array(
    'street' => 'Schorbachstrasse',
    'city' => 'Butzbach',
    'postal_code' => '35510',
    'country' => 'de'
);

$my_arr2 = array(
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'city' => 'Daly City',
    'country' => 'us',
    'postal_code' => '90255'
);

$my_arr3 = array(
    'name' => 'Czech Post',
    'street' => 'Prujezdna',
    'house_nr' => 9,
    'city' => 'Praha',
    'country' => 'cz',
    'postal_code' => '22599'
);

$my_arr4 = array(
    'street' => 'Kordačova',
    'house_nr' => 2912,
    'city' => 'Kladno',
    'country' => 'cz',
    'postal_code' => '27204'
);

$my_address1 = new address($my_arr1);
$my_address2 = new address($my_arr2);
$my_address3 = new address($my_arr3);
$my_address4 = new address($my_arr4);

var_dump($my_arr1);
var_dump($my_arr2);
var_dump($my_arr3);
var_dump($my_arr4);