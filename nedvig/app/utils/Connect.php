<?php 
namespace app\utils;

class Connect{
    public static function connectDB(){
        $db = mysqli_connect("localhost",'root', '', 'real estate');
        return $db;
    }
}
