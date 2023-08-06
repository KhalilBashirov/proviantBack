<?php
    require_once 'config/connect.php';
    require 'vendor/footer.php';
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
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

<h2>Оставить заявку на бесплатную коснультацию</h2>
<span>Заполните форму и мы ответим вам в течении 24 часов</span>


<form action="files/consult.php" method = 'post'>
<input type = "text" name = "userName" placeholder="Введите ФИО" > <br>
<input type = "email" name = "userEmail" placeholder="Введите email" > <br>


<input type="radio" name="userEducation" value="Детский сад" onchange="toggleButton()">
<label>Детский сад</label>

<input type="radio" name="userEducation" value="Школа" onchange="toggleButton()">
<label>Школа</label>

<input type="radio" name="userEducation" value="Колледж" onchange="toggleButton()">
<label>Колледж</label>

<input type="radio" name="userEducation" value="Университет" onchange="toggleButton()">
<label>Университет</label>

<input type="radio" name="userEducation" value="Комбинат питания" onchange="toggleButton()">
<label>Комбинат питания</label>

<input type="radio" name="userEducation" value="Другое" onchange="toggleButton()">
<label>Другое</label>


<br> <input type = "text" name = "userCity" placeholder="Введите свой населенный пункт" > <br>
<input type = "text" name = "userPhone" placeholder="+7 (999) 999-99-99" > <br>
<button type="submit">Отправить</button>
<form>




</body>
</html>
