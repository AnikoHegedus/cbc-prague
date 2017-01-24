<?php
    function get_current_year()
    {
        return date('Y');
    }

    function exact_date()
    {
        return date("j. n. Y");
    }

    function hour()
    {
        return date("h:i:sa");
    }

    function print_greeting(){
        global $my_greeting;
        echo $my_greeting;
    }

    function sum($num1, $num2){
        return $num1+$num2;
    }

    function my_age($year, $year_of_birth){
        return $year - $year_of_birth;
    }

    function dd($variable){
        var_dump($variable);
        die();
    }

?>