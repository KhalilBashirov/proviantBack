<?php
    require_once '../../config/connect.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $text = $_POST['text'];

    mysqli_query($connect, "UPDATE `news` SET `title` = '$title', `text` = '$text' WHERE `news`.`id` = '$id'");

    header("Location: ../admin.php");
?>