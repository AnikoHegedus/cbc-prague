<?php

$pdo = new PDO(
    //'mysql:dbname=database_name;host=locahost;charset=utf8',
    'mysql:dbname=games; host=127.0.0.1; charset=utf8',
    "root",
    ""
);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//select all the games 
$query = "
    SELECT *
    FROM game
    WHERE 1
    ORDER BY name ASC
";

$statement = $pdo->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);

$games = $statement->fetchAll();

// select all the genres
$query = "
    SELECT *
    FROM game_has_genre
        INNER JOIN `genre`
        ON game_has_genre.genre_id = genre.id
";
$statement = $pdo->prepare($query);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_OBJ);
$objects = $statement->fetchAll();

$genres_by_game = array();
foreach($objects as $object){
    $genres_by_game[$object->game_id][] = $object;
}
/*var_dump($objects);*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script
			  src="http://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
</head>
<body>
    
        <?php foreach($games as $game) :?>
        <div id="game_<?php echo $game->id;?>" class="game">
            <div class="image">
                <img src="<?php echo $game->image_url; ?>">
            </div>
            <div class="info">
               <h2 class="name"><?php echo $game->name; ?></h2>
            </div>
            <div class="release">
               Released at: <?php echo $game->released_at; ?>
            </div>
            <div class="genres">
                <?php foreach($genres_by_game[$game->id] as $genre):?>
                    <a href=#><?php echo $genre->name; ?></a>
               <?php endforeach; ?>
            </div>
            <div class="descrption">
                Description: <?php echo $game->description; ?>
            </div>
    <?php endforeach; ?>
    </div>
    <style>
    $(function(){
       var headings = $("h2");
       var basic_element = document.getElementById("list");
       var jquery_selection = $("#list");
       ///!!! basic element != jquery selection !!!///

       
    });

    </style>
</body>
</html>