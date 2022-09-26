<?php

namespace MVC\controller;
use MVC\core\validation;
use MVC\core\controller;

class Home {

    public function index(){
        echo "Welcome..........";
        // return $this->views("index");
        include "../src/views/index.php";
    }

    public function store(){
        $validation = new validation();
        $validation->input("username")->email();

        print_r($validation->showError());
    }
}