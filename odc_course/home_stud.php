<?php
session_start();
if (empty($_SESSION['user']) == 1) {
    include "design/login.html";
}

$connection = mysqli_connect('localhost', 'root', '', 'backend2');

$courses = mysqli_query($connection, "SELECT course.name AS `course` , users.id AS users_id FROM `enroll` INNER JOIN `users` ON users.id = enroll.users_id INNER JOIN `course` ON course.id = enroll.course_id; ");

$data_courses = mysqli_fetch_all($courses, MYSQLI_ASSOC);

foreach ($data_courses as $course) {
    if ($_SESSION['user']['id'] == $course['users_id']) {
        $user_course = "Your course is " . $course['course'];
    } else {
        $user_course = "You are not in any courses";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome <?= $_SESSION['user']['name'] ?></h1>
    <h2><?= $user_course ?></h2>
</body>

</html>