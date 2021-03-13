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
    <script type="text/javascript">
        function getDate()
        {
            var date = new Date();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();
            if(seconds < 10)
            {
                seconds = '0' + seconds;
            }
            document.getElementById('timedisplay').innerHTML = hours + ':' + minutes + ':' + seconds;
        }
        setInterval(getDate, 0);
    </script>
</head>
<body>
    <header>
        <a href="../index.html"><img src="../img/logo.png" style="width:100px"> </a>
        <h1 style="margin-left: 10px;">NewSee</h1>
        <div id="timedisplay"></div>
    </header>
    <div class="big-form">
        <form action="sign.php" method="post">
        <h1>Войти</h1> 
            <div class="mb-3">
                <label class="form-label">Логин</label>
                <input type="login" name="login" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Пароль</label>
                <input type="password" name="pass" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Войти</button>
            <p>Нет аккаунта? - <a href="registration.php">Зарегистрируйтесь</a></p>
            <p class="msg"> 
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?> 
            </p>
        </form>
    </div>
    <footer>
        <h1 style="font-size: 25px;">&copy; NewSee 2021</h1>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
