<?php

class giraffe extends animal {
    public static $my_giraffes = array();

    public static function getNumberOfGiraffes(){
        return count(static::$my_giraffes);
    }

    public static function getNumberOfGiraffesAtLcation($location){
        $number = 0;
        foreach(static::$my_giraffes as $giraffe){
            if($giraffe->location == $location){
                $number++;
            }
        }
        return $number;
    }

    public $is_thirsty = true;
    public $is_hungry = true;
    public $name = "Mickey";
    public $location = "forest";

    public function __construct($name, $location="forest"){
        //storing all the new born giraffes in an array
        static::$my_giraffes[] = $this;

        $this -> name = $name;
        $this -> location = $location;
        
    }

    public function __toString(){
        return $this->name;
    }

    public function can_fly(){
        if($this->can_fly){
            echo "It can fly";
        }else{
            echo "It can't fly :(";
        }
    }

    public function drink(){
        if($this->location == "pond"){
            $this -> is_thirsty = false;
        }else{
            echo "Nothing to drink here!";
        }
    }

    public function eat(){
        if($this->location == "forest"){
            $this -> is_hungry = false;
        }else{
            echo "Nothing to eat here!";
        }
    }

    public function sleep(){
        $this -> is_thirsty = true;
        $this -> is_hungry = true;
    }

    public function go_to_location($location){
        $this -> location = $location;
    }

/**
* DEPRECATED
*/
    public function go_to_forest(){
        $this -> go_to_location("forest");
    }

    public function go_to_pond(){
        $this -> go_to_location("pond");
    }
/**
* DEPRECATED
*/
    public function getLocationName(){
        switch($this->location){
            case "forest":
                return "in the forest";
                break;
            case "pond":
                return "by the pond";
                break;
            case "zoo":
                return "in the zoo";
                break;
            default: 
                return "lost";
                break;
        }
    }
}