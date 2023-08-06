<?php
    require_once '../config/connect.php';

    $news_id = $_GET['id'];

    $news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$news_id'");

    $news = mysqli_fetch_assoc($news);



    ?>

<h2><?= $news['title']?></h2>
<?= $news['text']?>

