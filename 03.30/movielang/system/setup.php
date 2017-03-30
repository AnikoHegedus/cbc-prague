<?php


// URL config
define('BASE_URL', '/');

// DB config 
define('DBNAME', 'movielang');
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASSWORD', '');
define('DBCHARSET', 'utf8');


// bootstrapping

function my_autoload($class)
{
    if(preg_match('#(.*?)_Model$#i', $class, $m))
    {
        require_once('models/'.strtolower($m[1]).'.model.php');
    }
    else
    {
        require_once('lib/'.$class.'.class.php');
    }
    
}

spl_autoload_register('my_autoload');