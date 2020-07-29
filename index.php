<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css"/>
    <style>
        @font-face {
            font-family: Roboto; /* Имя шрифта */
            src: url(css/fonts/Roboto-Regular.ttf); /* Путь к файлу со шрифтом */
            font-weight: normal;
            font-style: normal;
        }
        @font-face {
            font-family: Roboto; /* Имя шрифта */
            src: url(css/fonts/Roboto-Light.ttf); /* Путь к файлу со шрифтом */
            font-weight: 300;
            font-style: normal;
        }
        @font-face {
            font-family: Roboto; /* Имя шрифта */
            src: url(css/fonts/Roboto-Bold.ttf); /* Путь к файлу со шрифтом */
            font-weight: bold;
            font-style: normal;
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <title>Future</title>
</head>

<body>

<header>
    <div class="header-block">
    <div class="contacts">
        <div class="tel"><div class="tel-title">Телефон: &nbsp</div><div class="tel-number">(499) 340-94-71</div></div>
        <div class="email"><div class="email-title">E-mail: &nbsp</div><div class="email-value">info@future-group.ru</div></div>
    </div>
    <h1>Комментарии</h1>
    </div>
    <div class="logo">
        <a href="/index.php"><img src="/img/logo.png" alt="Future internet agency"></a>
    </div>
</header>
<div class="zig-zag"></div>
<div class="wrapper">
    <div class="container">

        <?php
        require_once 'content.php';
        ?>
        <hr>
        <div class="form">
            <h2>Оставить комментарий</h2>
            <form id="comment_create" action="" method="post">
                <p>Ваше имя</p>
                    <input type="text" name="name" required />
                <p>Ваш комментарий</p>
                    <textarea name="comment_text" placeholder="" required></textarea>
                <input type="submit" value="Отправить" />
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="logo">
        <a href="/index.php"><img src="/img/logo.png" alt="Future internet agency"></a>
    </div>
    <div class="footer-block">
        <div class="contacts">
            <div class="tel"><div class="tel-title">Телефон: &nbsp</div><div class="tel-number">(499) 340-94-71</div></div>
            <div class="email"><div class="email-title">E-mail: &nbsp</div><div class="email-value">info@future-group.ru</div></div>
            <div class="addres"><div class="addres-title">Адрес: &nbsp</div><div class="addres-value">115088 Москва, ул. 2-я Машиностроения, д.7 стр.1</div></div>
        </div>
        <div class="copyright">
            © 2010 - 2014 Furute. Все права защищены
        </div>
    </div>
</footer>

</body>
</html>