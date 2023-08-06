<?php
    require_once 'config/connect.php';
    require 'vendor/footer.php';
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
</table>
    <?php

    $news = mysqli_query($connect, "SELECT * FROM `news`");
    $news = mysqli_fetch_all($news);
    $news = array_reverse($news);

    foreach ($news as $new) {
        ?>
        <td>
            <tr><h4><?= $new[1] ?></h4></tr>
            <tr><?= substr($new[2], 0, 170)?> ...</tr>
            <td><a href="news_page.php?id=<?= $new[0] ?>">Посмотреть</a></td>
        </td>
    <?php
    }
    ?>
    </table>

</body>
</html>
