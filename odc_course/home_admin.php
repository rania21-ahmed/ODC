<?php

$connection = mysqli_connect('localhost', 'root', '', 'backend2');

$courses = mysqli_query($connection, "SELECT DISTINCT enroll.branch FROM `enroll` INNER JOIN `users` ON users.id = enroll.users_id ");

$branch = mysqli_fetch_all($courses, MYSQLI_ASSOC);

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
    <?php foreach ($branch as $value) : ?>
        <a href="branch.php?branch=<?= $value['branch'] ?>"><?= $value['branch'] ?></a>
    <?php endforeach; ?>
    <form action="search.php" method="post">
        <input type="text" name="serche">
        <input type="submit" value="Search...">
    </form>
    <a href="view.php">View All Data</a>
    <a href="add.php">add Data</a>
</body>

</html>