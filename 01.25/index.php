<?php

require_once("var_show.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<!--<?php 

var_show($_GET);
var_show($_POST);

$data = array(
    'page' => 'home',
    'foo' => 'bar'
);
$query_string = http_build_query($data);

var_show($query_string);

?>-->

<nav>
    <a href="index.php">Home</a>
    <a href="index.php?page=form">Show form</a>
</nav>

<div id="main">
<?php if(isset($_GET['page']) && $_GET['page']=='form' ): ?>
    <?php include('form.php'); ?>
<?php else : ?>
    This is home.
<?php endif; ?>
</div>

</body>
</html>