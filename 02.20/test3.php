<?php
require_once "test.php";
require_once "test2.php";

class us_address extends address{
    public $state = null;

    public static $local_country = "us";
}