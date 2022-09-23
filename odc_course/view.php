<?php

$connection = mysqli_connect('localhost', 'root', '', 'backend2');

$data = mysqli_query($connection, "SELECT course.name AS `course` , users.name AS users_name , `branch` FROM `enroll` INNER JOIN `users` ON users.id = enroll.users_id INNER JOIN `course` ON course.id = enroll.course_id ");

$stdu_data = mysqli_fetch_all($data, MYSQLI_ASSOC)

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
    <table border="1">
        <tr>
            <th>course</th>
            <th>name</th>
            <th>branch</th>
        </tr>
        <?php foreach ($stdu_data as $student) : ?>
            <tr>
                <td><?= $student['course'] ?></td>
                <td><?= $student['users_name'] ?></td>
                <td><a href="branch.php?branch=<?= $student['branch'] ?>"><?= $student['branch'] ?></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>