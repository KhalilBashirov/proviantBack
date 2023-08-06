<?php
    require_once '../../config/connect.php';

    $title = $_POST['title'];
    $text = $_POST['text'];

mysqli_query($connect, "INSERT INTO `news` (`id`, `title`, `text`) VALUES (NULL, '$title', '$text')");

    header('Location: ../admin.php');
?>
