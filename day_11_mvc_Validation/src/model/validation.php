<?php 

namespace MVC\model;
class validation{

    public function valName($name){
        $error =[];
        
        $const = define('FILTER_SANITIZE_STRING', 513);
         
         if(!filter_var($name, $const)){
            $error[] ="reeor";
         }
        if(!empty($name)){
            $error[] ="reeor";
        }

        if($name < 3){
            $error[] ="reeor";
        }
        if($name  >20){
            $error[] ="reeor";
        }
            return $error;
    }

    public function phone($phone){
        $resulterror=[];
        if(!filter_var($phone, FILTER_VALIDATE_INT)){
            $resulterror[] = "match: USA";
        }
        if(!preg_match('/^(\+1|001)?\(?([0-9]{3})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{4})/',$phone)){
            $resulterror[] = "match: USA";
        }
       
    }

    public function email($email){
        $error=[];
        if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$email)){
            $error[] = "error email";
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error[] = "error email";
        }
    }

}