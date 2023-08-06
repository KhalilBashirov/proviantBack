<?php
    $connect = mysqli_connect('localhost', 'root', '', 'proviant');
    
    if ($connect -> connect_error)
        die('Error connect to database');
?>
