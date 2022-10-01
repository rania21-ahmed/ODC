<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){
        
        // return view("test");
        //send data
        return view('test',['data'=>'Rania']);
    }
}
