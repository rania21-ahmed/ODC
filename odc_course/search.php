<?php
$se = $_POST['serche'];

$connection = mysqli_connect("localhost", "root", "", "backend2");
$qq = mysqli_query($connection, "SELECT * FROM users WHERE `name` LIKE '%$se%' OR `phone` LIKE '%$se%'");
$users =  mysqli_fetch_all($qq, MYSQLI_ASSOC);
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
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>

        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['name']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['phone']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>