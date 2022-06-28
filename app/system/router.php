<?php
namespace coding\app\system;

class Route{

    protected static $routes=array();

    public static function get($url,$callback){
        self::$routes['GET'][$url]=$callback;
    }
    public static function post($url,$callback){
        self::$routes['POST'][$url]=$callback;
    }


    public static function executeRoute($method,$url){
        $callback=self::$routes[$method][$url];
        call_user_func($callback);

    }




}

?>