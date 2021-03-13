<?php
    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $pass_confirm = $_POST['pass_confirm'];

    if ($pass === $pass_confirm) {
        $pass = md5($pass);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `mail`, `password`) VALUES (NULL, '$name', '$login', '$mail', '$pass')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: auth.php');

    } else {
        $_SESSION['message'] = 'Пароли не совпадают.';
        header('Location: registration.php');
    }