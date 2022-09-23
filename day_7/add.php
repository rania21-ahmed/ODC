<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $connection = mysqli_connect("localhost","root","","backend2");
    mysqli_query($connection,"INSERT INTO `users` (`name`,`email`,`phone`,`groub`) VALUES ('$name','$email','$phone',0) ");

    if(mysqli_affected_rows($connection) == 1){
        echo "user is Add done";
    }

}else{

    include "des/add.html";

}