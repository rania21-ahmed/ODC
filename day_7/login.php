<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $email = $_POST['email'];
    $phone =$_POST['phone'];

    $connection = mysqli_connect("localhost","root","","backend2");
    $query =  mysqli_query($connection,"SELECT * FROM `users` WHERE `email` = '$email' AND `phone` = '$phone'" );

    $user =  mysqli_fetch_assoc($query);
    if(empty($user)){
        header("location: des/login.html");
    }else{
        $_SESSION['crud'] = $user;
        header("location: home.php");
    }
}else{
    include "des/login.html";
}