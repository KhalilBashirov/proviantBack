<?php
    require_once '../config/connect.php';
    require 'vendor/admin_footer.php';
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Административная панель</title>
</head>
<body>

<a href="creater.php">Добавить новость</a> <br><br>
<table>
<?php
    $news = mysqli_query($connect, "SELECT * FROM `news`");
    $news = mysqli_fetch_all($news);
    $news = array_reverse($news);

    foreach ($news as $new) {
        ?>
        <td>
            <tr><h4><?= $new[1] ?></h4></tr>
            <tr><?= substr($new[2], 0, 170)?> ...</tr>
            </td>
            <tr>
            <a href="admin_news_page.php?id=<?= $new[0] ?>">Посмотреть</a>
            <a href="updater.php?id=<?= $new[0] ?>">Изменить</a>
            <a style="color: red;" href="crud/delete.php?id=<?= $new[0] ?>">Удалить</a><tr>

    <?php
    }
    ?>
    </table>
</body>
</html>
