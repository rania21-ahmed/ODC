<?php

namespace MVC\core;

trait controller{

    
    public function __call($name,$arg){
        echo "Not found ".$name;
    }
    
    public function views($path){
        include "../src/views/".$path.".php";
    
    }

    public function dd($date){
        echo "<pre>";
        print_r($date);
        echo "</pre>";
    }
}