
<?php
$name = "James";

$name .= " Bond";

$bond_info = array(
    'first_name' => 'James',
    'last_name' => 'Bond',
    'gun' => 'Walther PPK',
    'car' => 'Aston Martin',
    'enemy' => 'Stavro Blofeld',
    'relationship_status' => 'widower',
    'cases' => 24
);

echo "My name is " . $bond_info["last_name"] . ". " . $bond_info["first_name"] . " "  . $bond_info["last_name"]. ". <br>";

echo "One day when I was driving my " . $bond_info["car"] . " in the Alps " . $bond_info["enemy"] . " came along and made me a " . $bond_info["relationship_status"] . ". If only I had my " . $bond_info["gun"] . " with me!";

$bond_info["last_case"] = "Spectre";

class bond_case{
    
    protected static $cases_solved = 0;
    protected static $girls_met = 0;

    public static function getAvgGirlsPerCase(){
        return static::$girls_met/static::$cases_solved;
    }
    
    protected $name = null;
    protected $year = null;
    protected $enemy = null;
    protected $girls = array();

    public function __construct($year){
        $this -> year = $year;
        static::$cases_solved++;
    }

    function setName($name){
        $this -> name = $name;
    }

    function getName(){
       return $this -> name;
    }

    function setYear($year){
        $this -> year = $year;
    }

    function getYear(){
        return $this -> year;
    }
    function setEnemy($enemy){
        $this -> enemy = $enemy;
    }
    function getEnemy(){
        return $enemy -> enemy;
    }

    function addGirl($name){
        $this -> girls[] = $name;
        static::$girls_met++;
    }

}

$spectre = new bond_case(2015);
$spectre -> setName("Spectre");
$spectre -> setEnemy("Ernst Stavro Blofeld");
$spectre -> addGirl("Estrella");
$spectre -> addGirl("Lucia Sciarra");
$spectre -> addGirl("Madeleine Swann");
var_dump($spectre);


$casino = new bond_case(2006);
$casino -> setName("Casino Royale");
$casino -> setEnemy("Le Chiffre");
$casino -> addGirl("Vesper Lynd");
$casino -> addGirl("Solange Dimitrios");
var_dump($casino);

echo "On average Bond has met " . bond_case::getAvgGirlsPerCase() . " girls per case.";
echo "<hr>";

$input = "1,2,3,4,5,6,7";
$split = str_split($input);
$result = 0;
foreach($split as $number){
    $result += $number;
}
echo $result;


class Dragonball{
    private $ballCount = 0;

    public function __construct(){
        $this -> ballCount++;
    }

    public function iFoundaBall(){
        if($ballCount == 7){
            echo "You can ask your wish ";
            $this -> ballCount = 0;
        }
}