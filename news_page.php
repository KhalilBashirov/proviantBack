<?php
	require_once 'config/connect.php';
    require 'vendor/footer.php';
    $id = $_GET['id'];

    $news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$id'");
    $news = mysqli_fetch_assoc($news); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменение новости</title>
</head>
<body>
    <h1><?= $news['title']?></h1>
    <?= $news['text'] ?>
</body>
</html>

