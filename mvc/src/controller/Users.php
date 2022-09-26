<?php

namespace MVC\controller;

use MVC\core\DB;
use MVC\model\UserModel;
use MVC\core\controller;

class Users extends DB{

    use controller;

    public function create(){
        return self::views("create");
    }
    
    public function store(){

        $data =[
            "name"=>"Mvc1",
            "email"=>"Mvc@gmail.com",
            "password"=>"12345",
            "img"=>"mvc23"
        ];
        $usermodel =new UserModel;
        $usermodel->createNewUser($data);
    }
}