<?php 
require_once '../config/connect.php';

$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userEducation = $_POST['userEducation'];
$userCity = $_POST['userCity'];
$userPhone = $_POST['userPhone'];

mysqli_query($connect, "INSERT INTO `consult` (`id`, `userName`, `userEmail`, `userEducation`, `userCity`, `userPhone` ) VALUES (NULL, '$userName', '$userEmail', '$userEducation', '$userCity',  '$userPhone')");

header('Location: ../index.php');
?>