<?php
namespace coding\app\system;

class Request{


    public function checkRequest(){
        $url=$_SERVER['REQUEST_URI'];
        $method=$_SERVER['REQUEST_METHOD'];
        if($method == 'GET'){
            Router::get($url,function(){
                echo "";

            });
        }
        if($method == 'POST'){
            Router::get($url,function(){
                echo "";

            });
        }

       Router::executeRoute($method,$url);
        
    }
}
?>