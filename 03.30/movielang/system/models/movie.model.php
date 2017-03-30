<?php

class Movie_Model
{
    public static function getMovie($id)
    {
        $query = "
            SELECT `movie`.*,
                    `movie_translations`.*
            FROM `movie`
              LEFT JOIN `movie_translations`
              ON `movie`.`id` = `movie_translations`.`movie_id`
              AND `movie_translations`.`locale` = ?
            WHERE `movie`.`id` = ?
        ";

        $locale = lang::getLocale();
        return db::find($query, [$locale, $id]);
    }
}