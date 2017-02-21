<?php
$user_id = 4;

session_start();

/*$_SESSION["user_id"] = $user_id;*/

var_dump($_SESSION);

$username = "Somebody";
$user = array(
    "user_id" => $user_id,
    "username" => $username,
);

class Auth{
    protected static $users = array();

    public static function addUser($user){
        static::$users[] = $user;
    }

    public static function getUsers(){
        return static::$users;
    }

    protected static function getCurrentUserId(){
        if(!empty($_SESSION['user_id'])){
            return $_SESSION['user_id'];
        }else{
            return null;
        }
    }

    public static function getCurrentUser(){
        $user_id = static::getCurrentUserId();
        foreach(static::$users as $user){
            if($user_id == $user['user_id']){
                return $user;
            }
        }
        return null;
    }
}

Auth::addUser(array('user_id' => 1, 'username' => 'Kevin'));
Auth::addUser(array('user_id' => 2, 'username' => 'Stuart'));
Auth::addUser(array('user_id' => 3, 'username' => 'Bob'));
Auth::addUser(array('user_id' => 4, 'username' => 'Kate'));

$current_user = Auth::getCurrentUser();
var_dump(Auth::getUsers());
var_dump($current_user);