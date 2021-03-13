<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Инженерный проект</title>
</head>
<body>
    <header>
        <div class="header-block">
            <h1>NewSee</h1>
            <p style="font-size: 30px;">Будьте в курсе всех новостей!</p>
            <a href="php/auth.php" class="btn btn-dark">Войти</a> или  <a href="php/registration.php" class="btn btn-dark">Зарегистрироваться</a> 
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">Главное</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Коронавирус</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Политика</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Спорт</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Технологии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Наука</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Авто</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="carousel-center">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/kimg1.jpg" class="d-block w-100" alt="kimg1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Иммунолог Крючков заявил о клеточной защите организма от коронавируса</h5>
                    <p>МОСКВА, 13 мар — РИА Новости. Иммунолог и генеральный директор контрактно-исследовательской компании Николай Крючков в беседе с kp.ru заявил о клеточной защите организма от коронавирусной инфекции.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/kimg2.jpg" class="d-block w-100" alt="kimg2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>МИД Украины призвал Россию «предоставить доступ» в Крым</h5>
                    <p>Глава МИД Украины Дмитрий Кулеба выступил на неформальном заседании Совета Безопасности ООН по теме Крыма. Он призвал Россию занять неполитизированную позицию и открыть доступ в Крым.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="img/kimg3.jpg" class="d-block w-100" alt="kimg3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Конфликт из-за России вспыхнул в одном из аналитических центров США</h5>
                    <p>Статья, посвященная России и опубликованная на сайте американского аналитического центра Atlantic Council («Атлантический совет»), спровоцировала конфликт среди его сотрудников.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
