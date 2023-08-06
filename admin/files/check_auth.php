<?php

    session_start();

    require_once 'config/connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_admin = mysqli_query($connect,"SELECT * FROM `users`  WHERE login = '$login' AND password = '$password'");

    if (mysqli_num_rows($check_admin) > 0)
        header('Location: ../admin.php');

?>
