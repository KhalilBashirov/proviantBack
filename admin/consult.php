<?php
require_once "../config/connect.php";
require 'vendor/admin_footer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Заявки на консультации</title>
</head>


<body>
<table>
<td>ФИО</td>
<td>Почта</td>
<td>Организация</td>
<td>Город</td>
<td>Номер телефона</td>
	<?php
	$consult = mysqli_query($connect, "SELECT * FROM `consult`");
    $consult = mysqli_fetch_all($consult);
    $consult = array_reverse($consult);

    foreach ($consult as $consult1) {
        ?>
        <tr>
            <td><?= $consult1[1]?></td>
            <td><?= $consult1[2]?></td>
            <td><?= $consult1[3]?></td>
            <td><?= $consult1[4]?></td>
            <td><?= $consult1[5]?></td>
        </tr>
    <?php
    }
    ?>
    </table>


</body>
</html>