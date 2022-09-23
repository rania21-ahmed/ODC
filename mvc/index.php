<?php


spl_autoload_register(function($x){
    $der=["model/","controller/"];
   for($i=0;$i<count($der);$i++){
        include $der[$i].$x . ".php";
       
    }
});


$ob =new product;
$ob->index();