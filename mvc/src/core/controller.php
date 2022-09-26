<?php

namespace MVC\core;

trait controller{

    
    public function __call($name,$arg){
        echo "Not found ".$name;
    }
    
    public function views($path){
        include "../src/views/".$path.".php";
    
    }
}