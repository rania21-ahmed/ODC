<?php

session_start();

if(empty($_SESSION['crud'])){
    header("location: login.php");
}


$connection = mysqli_connect("localhost","root","","backend2");
$query =  mysqli_query($connection,"SELECT * FROM `users`");
$users =  mysqli_fetch_all($query,MYSQLI_ASSOC);

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
            
        <?php if($_SESSION['crud']['admin'] == 1): ?>
            <th>delete</th>
        <?php endif; ?>
        </tr>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?=  $user['id']; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['phone']; ?></td>
            <?php if($_SESSION['crud']['admin'] == 1): ?>

                <td><a href="delete.php?id=<?=  $user['id']; ?>">delete</a></td>
            <?php endif; ?> 
        </tr>
       <?php endforeach; ?>
    </table>
</body>
</html>

<a href="logout.php"> logout</a>




<?php include "des/add.html"; ?>