<?php 
namespace app\utils;

class Router{
    public static $listPages = [];

    public static function myGet($uri, $namePage){
        self::$listPages[] = [
            "uri" => $uri,
            "pages" => $namePage
        ];
    }

    public static function myPost($uri, $controller, $method, $data, $file){
        self::$listPages[] = [
            "uri" => $uri,
            "class" => $controller, 
            "method" => $method, 
            "data" => $data, 
            "file" => $file,
            "post" => true
        ];
    }

    public static function getContent(){
        $Q = $_GET['q'];

        foreach(self::$listPages as $per){
            if($per["uri"] === '/'.$Q){
                if($per["post"] == true && $_SERVER['REQUEST_METHOD'] === "POST"){
                    switch($per['method']){
                        case "addInfo":
                            $action = new $per['class'];
                            $method = $per['method'];
                            $action -> $method($_POST);
                            die();
                        case 'signup':
                            $action = new $per['class'];
                            $method = $per['method'];
                            $action -> $method($_POST);
                            die();
                        case 'show_item':
                            $action = new $per['class'];
                            $method = $per['method'];
                            $action -> $method($_POST);
                            die();
                        case 'account_broker':
                            $action = new $per['class'];
                            $method = $per['method'];
                            $action -> $method($_POST);
                            die();
                    }
                }else{
                    require_once "views/pages/".$per["pages"].".php";
                    die();
                }
            }
        }
    }
}