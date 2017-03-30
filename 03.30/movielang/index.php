<?php

include 'system/setup.php';

lang::setLocale('cz');

$movie = Movie_Model::getMovie(1);

include 'system/views/movie.php';