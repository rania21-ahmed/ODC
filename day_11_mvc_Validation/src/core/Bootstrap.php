<?php
namespace MVC\core;

class Bootstrap{

    private $controller;
    private $method;
    private $params;

    public function __construct()
    {
        $this->url();
        $this->run();
    }
    public function url(){
        $url = $_SERVER['QUERY_STRING'];
        //print_r($url);
        $url =explode("/",$url);
        $this->controller = (!empty($url[0])) ? $url[0] : "home";
        $this->method = (!empty($url[1])) ? $url[1] : "index";
        //الباقى من ال url
        if(!empty($url)){
            unset($url[0],$url[1]);
        }
      
        $this->params = $url;//array_values($url);
        // echo "Test ";
        // echo $url;
    }

    private function run(){
        // echo $this->controller;
        // echo $this->method;

        $controller = "MVC\\controller\\".$this->controller;
        if(class_exists($controller )){
           if(method_exists($controller,$this->method)){
                call_user_func_array([$controller,$this->method],[]);
           }else{
            echo "Method not exit";
           }
        }else{
            echo "class not exist ";
        }
        // echo $controller;
        // echo $this->params;
        // call_user_func_array([$controller,$this->method],$this->params);
    }
}