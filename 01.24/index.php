<?php 

    require "functions.php";

    $my_greeting = "Hello, world!";
    $sentence = "My sentence is ";

    echo $my_greeting;

    print_greeting();

    
    $first_name = "Aniko";
    $surname = "Hegedus";
    $year_of_birth = 1978;
    $height = "160 cm";


    define('MY_OS', 'Windows');

    $num1 = 45;
    $num2 = 33;

    echo ("My name is " . $first_name . " " . $surname);

    $celsius = -6;
    $fahrenheit = (9/5)*$celsius+32;

    $owns_a_car = false;
    $vehicle = $owns_a_car ? 'car' : 'bicycle';

    $result = $num1 % 2 == 0 ? "even" : "odd";

    $male = false;
    $old = false;

    $status = $male ? ($old ? "old male" : "young male") : ($old ? "old female" : "young female");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
    First name: <?php echo $first_name?><br>
    Surname: <?php echo $surname?><br>
    Date of birth: <?php echo $year_of_birth?><br>
    Height: <?php echo $height?><br>
</p>

<p>
    My OS is: <?php echo MY_OS; ?>
</p>

<p>
    <?php echo $num1?> plus <?php echo $num2?> equal <?php echo sum($num1, $num2) ?>.
</p>

<p>
    In 2002 I was <?php echo my_age(2002, $year_of_birth) ?> years old.
</p>


<p><?php var_dump($surname);?></p>

<p><?php echo is_string($surname);?></p>

<p><?php echo $celsius;?> Celsius equals to <?php echo $fahrenheit;?> Fahrenheit.</p>

<p><?php echo $vehicle;?></p>

<p><?php echo $num1;?> is an <?php echo $result?> number.</p>

<p>I'm a <?php echo $status;?>.</p>


</body>
</html>