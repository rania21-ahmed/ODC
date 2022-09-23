<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    include "design/register.html";
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    if (empty($name) == 1 || empty($email) == 1 || empty($password) == 1 || empty($phone)) {
        include "design/register.html";
        echo "there is an empty filed !!";
    } else {
        $connection = mysqli_connect("localhost", "root", "", "backend2");

        $query = mysqli_query($connection, "INSERT INTO `users` (`name`,`email`,`password`,`phone`,`admin`) VALUES ('$name','$email','$password','$phone',1)");

        if (mysqli_affected_rows($connection) == 1) {
            header("location: login.php");
        }
    }
}
