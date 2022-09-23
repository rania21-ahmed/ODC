<?php

$branch = $_GET['branch'];

$connection = mysqli_connect('localhost', 'root', '', 'backend2');

$query = mysqli_query($connection, "SELECT users.name AS user , branch FROM `enroll` INNER JOIN `users` ON users.id = enroll.users_id");

$array_student = mysqli_fetch_all($query, MYSQLI_ASSOC);

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
    <table>
        <table border="1">
            <tr>
                <th>name</th>
            </tr>
            <?php foreach ($array_student as $student) : ?>
                <tr>
                    <?php if ($student['branch'] == $branch) : ?>
                        <td><?= $student['user'] ?></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    </table>
</body>

</html>