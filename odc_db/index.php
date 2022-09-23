<?php


include "db.php";

$db =new db;

echo "<pre>";

//select
// print_r($db->select("users","*"));
// print_r($db->select("users","name")->where("id","=","1")->getAll()); //change function 
// print_r($db->select("users","name")->where("id","=","1")->getRow()); //change function


//insert

$user =[
    "name"=>"eeeeeeeeeeee"
];

echo $db->insert("users",$user)->excute();

echo "1111";