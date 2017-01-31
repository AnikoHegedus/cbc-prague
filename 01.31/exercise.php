<?php
function divide($num_1, $num_2, &$remainder){
    
    $remainder = $num_1 % $num_2;
    return $num_1 / $num_2;
    
}

$result = divide(3, 2, $my_remainder);
var_dump($result);
var_dump($my_remainder);


function validation($value, &$messages){
    if(!$value){
        $messages[] = "The value is invalid";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php $messages = []; ?>
    <?php validation(0, $messages); ?>
    <?php var_dump($messages); ?>

</body>
</html>