<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $movie["title"]; ?></title>

    <link rel="stylesheet" href="css/movie.css" />
</head>
<body>

    <div id="page">

        <div class="poster">
            <div class="label"><?php lang::t("movie-poster", "Movie poster"); ?>:</div>
            <img src="media/posters/monster-calls.jpg" alt="A monster calls" />

        </div>

        <div class="info">

            <div class="label"><?php lang::t("movie-title"); ?>:</div>
            <h1><?php echo $movie["title"]; ?></h1>

            <div class="label"><?php lang::t("movie-year"); ?>:</div>
            <div class="year"><?php echo $movie["year"]; ?></div>

            <div class="label"><?php lang::t("movie-plot"); ?>:</div>
            <div class="plot">
                <?php echo $movie["plot"]; ?>
            </div>

        </div>

    </div>

    
</body>
</html>