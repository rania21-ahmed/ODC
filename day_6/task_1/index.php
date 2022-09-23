<?php

$connect =mysqli_connect('localhost','root','','odc');

$q = mysqli_query($connect,"SELECT  * from `category` ");

$qq=mysqli_fetch_all($q,MYSQLI_ASSOC);
//print_r($qq);
foreach($qq as $value){
    foreach($value as $key=>$v){
        echo  $key . " => " . $v . "<br>";
    }

}