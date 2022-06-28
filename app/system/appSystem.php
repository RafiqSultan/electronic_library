<?php

namespace coding\app\system;

class AppSystem{
public Request $request;
    function __construct(){

        $this->request=new Request();
    
    }
    public function start(){

        $this->request->checkRequest();
    }
}
?>