<?php
    require_once '../config/connect.php';

    $news_id = $_GET['id'];

    $news = mysqli_query($connect, "SELECT * FROM `news` WHERE `id` = '$news_id'");

    $news = mysqli_fetch_assoc($news);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Изменение новости</title>
</head>
<body>
<form action="crud/update.php" method="post">
    <input type="hidden" name="id" value="<?= $news['id'] ?>">
    <p>Title</p>
    <input type="text" name="title" value="<?= $news['title']?>">
    <p>Description</p>
    <textarea name="text" ><?= $news['text'] ?></textarea>
    <button type="submit">Обновить</button>
</form>

</body>
</html>


