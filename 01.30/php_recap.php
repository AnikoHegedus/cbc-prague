<?php

$movies = array(
  'The Shawshank redemption',
  'The Godfather',
  'The Godfather II',
  'Dark Knight', 
  '12 angry men', 
  'Schindler\'s list',
  'Pulp fiction',
  'Lord of the Rings: Return of the King',
  'The good, the bad and the ugly',
  'Fight club'
);


$movie_names = array(
  'tt0111161' => 'The Shawshank redemption',
  'tt0068646' => 'The Godfather',
  'tt0071562' => 'The Godfather II',
  'tt0468569' => 'Dark Knight', 
  'tt0050083' => '12 angry men', 
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club'
);
$movie_ratings = array(
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9, 
  'tt0050083' => 8.9, 
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ol>
    <?php foreach($movies as $key => $value) : ?>
        <li><?php echo $value; ?></li>
    <?php endforeach ?>
    </ol>
<hr>

<?php for($i = 1; $i < 6; $i++) : ?>
    <li><?php echo "List item number " . $i; ?></li>
<?php endfor?>

<hr>

<?php for($i = 10; $i > 0; $i--) : ?>
    <?php if($i == 7) continue; ?>
    <?php if($i == 3) break; ?>
    <li><?php echo "List item number " . $i; ?></li>
<?php endfor?>

<hr>

<ol>
    <?php for($i = 0; $i < count($movies); $i++) : ?>
        <li><?php echo $movies[$i]  ?></li>
    <?php endfor?>

    <?php 
        sort($movies);
        var_dump($movies);
    ?>
</ol>

<hr>
<ol>
    <?php foreach($movie_names as $unique_id => $title) : ?>
        <li>
            <?php echo $title; ?>
            <?php echo $movie_ratings[$unique_id]; ?>
        </li>
    <?php endforeach; ?>
</ol>

<hr>

<?php asort($movie_ratings); ?>
<ol>
    <?php foreach ($movie_ratings as $unique_id => $rating) : ?>
        <li>
            <?php echo $movie_names[$unique_id]; ?>
            <?php echo $rating; ?>
        </li>
    <?php endforeach; ?>
</ol>

<hr>

<?php arsort($movie_ratings); ?>
<ol>
    <?php foreach ($movie_ratings as $unique_id => $rating) : ?>
        <li>
            <?php echo $movie_names[$unique_id]; ?>
            <?php echo $rating; ?>
        </li>
    <?php endforeach; ?>
</ol>




</body>
</html>