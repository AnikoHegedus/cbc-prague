<?php

$var = 12.6666;

$country_names = array(
    'cz' => 'Czechia',
    'de' => 'Germany',
    'fr' => 'France'
);

$this_country = $country_names["cz"];

$country_gdp = array(
    'cz' => 189982000000,
    'de' => 3371000000000,
    'fr' => 2422000000000
);

$money = 123456789000000;

var_dump($money);
echo "The amount is " . $money . " USD<br>";
echo "The amount is " . $money/1000 . " thousand USD<br>";
echo "The amount is " . $money/1000000000  . " billion  USD<br>";
echo "<hr>";
echo "The amount is close to " . round($money/1000000000000) . " trillion USD<br>";
echo "The amount is close to " . floor($money/1000000000000) . " trillion USD<br>";
echo "The amount is close to " . ceil($money/1000000000000) . " trillion USD<br>";
echo "<hr>";
echo "<ul>";
foreach($country_names as $key=>$country){
    echo "<li>Nominal GDP value of " . $country . " is $ " . $country_gdp[$key]/1000000000 . " billion</li>";
}
echo "</ul>";
echo "<hr>";

class country{
    protected $name = null;
    protected $gdp = null;

    public function __construct($name, $gdp){
        $this -> name = $name;
        $this -> gdp = $gdp;
    }

    public function getName(){
        return $this->name;
    }

    public function getGdp(){
        return round($this->gdp/1000000000);
    }
}

$countries = array();

foreach($country_names as $key=>$gdp){
    $country = new country($gdp, $country_gdp[$key]);
    $countries[] = $country;
}

var_dump($countries);
echo "<hr>";

foreach($countries as $key => $country){
    
    echo "<li>Nominal GDP value of " . $country -> getName() . " is $ " . $country -> getGdp() . " billion</li>";
    
   
}