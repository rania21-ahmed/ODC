<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    include "design/login.html";
} else {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'backend2');
    $search = mysqli_query($connection, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

    $user = mysqli_fetch_all($search,MYSQLI_ASSOC);

    if (empty($user) == 1) {
        include "design/login.html";
        echo "Wrong inputs";
    } else {
        $_SESSION['user'] = $user;
        if ($user['admin'] == 1) {
            $_SESSION['admin'] = 1;
            header("location: home_admin.php");
        } else {
            header("location: home_stud.php");
        }
    }
}
