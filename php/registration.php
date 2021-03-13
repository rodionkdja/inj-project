<?php
    session_start();

    if ($_SESSION['user']) {
        header('Location: profile.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/regstyle.css">
    <title>Инженерный проект</title>
</head>
<body>
    <div class="big-form">
         
        <form action="reg.php" method="post">
        <h1>Зарегистрироваться</h1> 
            <div class="mb-3">
                <labelclass="form-label">ФИО</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <labelclass="form-label">Логин</label>
                <input type="login" name="login" class="form-control" required>
            </div>
            <div class="mb-3">
                <labelclass="form-label">Почта</label>
                <input type="email" name="mail" class="form-control" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Пароль</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Подтвердите пароль</label>
                <input type="password" name="pass_confirm" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Зарегистрироваться</button>
            <p>Уже есть аккаунт? - <a href="auth.php">Войти</a></p>
            <p class="msg"> 
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?> 
            </p>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>