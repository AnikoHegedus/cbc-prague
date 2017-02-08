<?php

//get all the files within classes as array
$files = scandir("classes");

foreach($files as $file){
    // if the file is the reference to this folder
    //or the one above, continue
    if($file == "." || $file == "..")
    continue;
    
    //if the file is a php file 
    if(pathinfo($file, PATHINFO_EXTENSION) == "php"){
        //require the file
        require_once ("classes/" . $file);
    }
}

$rupert = new giraffe("Rupert", "pond");
$berta = new giraffe("Berta");
$rufus = new giraffe("Rufus");
$norma = new giraffe("Norma", "zoo");
$butkus = new giraffe("Butkus");
$bella = new giraffe("Bella");

$berta->go_to_pond();
$butkus -> go_to_pond();
$butkus -> drink();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nature report</title>
</head>
<body>

<h1>Nature report</h1>
    
<p>Currently there are <?php echo giraffe::getNumberOfGiraffes(); ?> giraffes in the world.</p>
<p><?php echo giraffe::getNumberOfGiraffesAtLcation("forest"); ?> of them are in the forest, <?php echo giraffe::getNumberOfGiraffesAtLcation("pond"); ?>  are by the pond.</p>
<p><?php echo giraffe::getNumberOfGiraffesAtLcation("zoo"); ?> are in the zoo.</p>
<p>There is a giraffe called <?php echo $butkus -> name; ?>.</p>
<p>It <?php echo $butkus->is_hungry ? "is" : "is not"; ?> hungry and it <?php echo $butkus->is_thirsty ? "is" : "is not"; ?> thirsty.</p>
<p>It is <?php echo $butkus->getLocationName() ?>.</p>

<p>The giraffes are:</p>
<ul>
    <?php foreach(giraffe::$my_giraffes as $giraffe) : ?>
        <li><?php echo $giraffe->name; ?> is <?php echo $giraffe->getLocationName(); ?></li>
    <?php endforeach; ?>    
</ul>



</body>
</html>