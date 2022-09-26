<?php

namespace MVC\core;
class validation{

    private $patterns =[
            'uri'           => '[A-Za-z0-9-\/_?&=]+',
            'url'           => '[A-Za-z0-9-:.\/_?&=#]+',
            'alpha'         => '[\p{L}]+',
            'words'         => '[\p{L}\s]+',
            'alphanum'      => '[\p{L}0-9]+',
            'int'           => '[0-9]+',
            'float'         => '[0-9\.,]+',
            'tel'           => '[0-9+\s()-]+',
            'text'          => '[\p{L}0-9\s-.,;:!"%&()?+\'°#\/@]+',
            'file'          => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+\.[A-Za-z0-9]{2,4}',
            'folder'        => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+',
            'address'       => '[\p{L}0-9\s.,()°-]+',
            'date_dmy'      => '[0-9]{1,2}\-[0-9]{1,2}\-[0-9]{4}',
            'date_ymd'      => '[0-9]{4}\-[0-9]{1,2}\-[0-9]{1,2}',
            'email'         => '[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})'

    ];

    //error array

    private $error =[];

    private $input;
    private $value;

    public function input($input){
        // $this->input=$_REQUEST[$input];
        if(!isset( $_REQUEST[$input])){
            $this->error[]="Not Input : $input exit";
        }else{
            $this->input = $input;
            $this->value();
            // echo $this->input;die;
             
        }

        return $this;
    }

    public function value(){ ///true
        $this->value =$_REQUEST[$this->input];
        // echo $this->value;die;
        return $this;
    }

    public function integer(){
        $regex = '/^('.$this->patterns['int'].')$/u';
        // echo $this->value;
        if(!preg_match($regex,$this->value)){
            $this->error[]=" Input : $this->input must be integer";

        }
        return $this;
    }

    public function max($max){
        $this->value = trim($this->value);
        // echo $this->value;die;
        if(strlen(($this->value)) > $max){
            $this->error[]=" Input : $this->input must be max $max";
        }
        return $this;
    }
    public function min($min){
        $this->value = trim($this->value);
        // echo $this->value;die;
        if(strlen(($this->value)) < $min){
            $this->error[]=" Input : $this->input must be min $min";
        }
        return $this;
    }
    public function requerd(){
        if(!(strlen($this->value) > 0 && !empty($this->value) && $this->value != "")){
            $this->error[]=" Input : $this->input must be requerd";
        }
        return $this;
    }
    public function email(){
        $regex = '/^('.$this->patterns['email'].')$/u';
        // echo $this->value;
        if(!preg_match($regex,$this->value)){
            $this->error[]=" Input : $this->input must be email";

        }
        return $this;
    }

   
    public function float(){
        $regex = '/^('.$this->patterns['float'].')$/u';
        // echo $this->value;
        if(!preg_match($regex,$this->value)){
            $this->error[]=" Input : $this->input must be float";

        }
        return $this;
    }
    public function string(){
        $regex = '/^('.$this->patterns['words'].')$/u';
        // echo $this->value;
        if(!preg_match($regex,$this->value)){
            $this->error[]=" Input : $this->input must be string ";

        }
        return $this;
    }

    public function showError(){
        if(!empty($this->error)){
            echo "<ul>";
            foreach($this->error as $er){
                echo "<li style='color:red'> $er </li>";
            }
            echo "</ul>";
        }
    }

    public function success(){
        return (!empty($this->error)) ? true : false ;
    }
}