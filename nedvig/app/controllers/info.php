<?php 
namespace app\controllers;
use app\utils\Connect;

class Info{
    public static function addInfo($data){
        $id = $_GET['id'];
        $app = $_POST['app'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        
        $addQuery = "INSERT INTO `messages` (`id`, `app`, `Name`, `Phone`, `Email`, `Message`) VALUES (NULL, '$app', '$name', '$phone', '$email', '$message')"; 
        $add = mysqli_query(Connect::connectDB(), $addQuery);

        header('Location: /item');
    }

    //ВЫВОД ИНФЫ НА КАРТОЧКУ ИЗ БД
    public static function show_item($id){
        // $id = $_GET['id'];

        $showQuery = "SELECT * FROM `position` WHERE `id` = '$id'";
        $show = mysqli_query(Connect::connectDB(), $showQuery);
        $show = mysqli_fetch_assoc($show);

        return $show;
    }

    //ВЫВОД АККАУНТА БРОКЕРА
    public static function account_broker($id){
        $acc_broker_query = "SELECT * FROM `broker`";
        $acc_broker = mysqli_query(Connect::connectDB(), $acc_broker_query);
        $acc_broker = mysqli_fetch_assoc($acc_broker);

        return $acc_broker;
    }

//РЕГИСТРАЦИЯ
    public static function signup($data){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $signup_query = "INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES (NULL, '$name', '$email', '$pass')";
        $signup = mysqli_query(Connect::connectDB(), $signup_query);

        
    }
}
