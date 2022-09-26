<?php

namespace MVC\model;
use MVC\core\DB;
class UserModel extends DB{
    public function createNewUser($date){
         return $this->insert("users",$date)->excute();
    }
}