<?php

$pattern = "#a\w+\d+#i";
$string = "Cat33";

$result = preg_match($pattern, $string, $matches);

var_dump($result);
var_dump($matches);