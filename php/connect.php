<?php
    $connect = mysqli_connect('localhost','root','root','register');

    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }