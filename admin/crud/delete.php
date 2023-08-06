<?php
    require_once '../../config/connect.php';

    $news_id = $_GET['id'];

    $news = mysqli_query($connect, "DELETE  FROM `news` WHERE `id` = '$news_id'");

    header("Location: ../admin.php");
    ?>

