<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game haven: профіль</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style.scss">
    <link rel="icon" href="./pictures/monke.png">
</head>

<body>
    <span id="top"></span>

    <div class="header_nav_bg">
        <?php
        if (isset($_GET['error']) && $_GET['error'] === 'user_not_found') {
            echo '<div class="error_message" id="error_auth"><span>Такого користувача не знайдено!
            <center><a href="#" id="link_error_message">Ок</a></span></center></div>';
        }
        ?>

        <div class="header_nav">
            <ul class="header_nav_list">
                <li>
                    <a href="./main.php">
                        <span>Головна</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Нові ігри</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Знижки</span>
                    </a>
                </li>
            </ul>

            <?php ?>

            <div class="header_nav_profile_content header_nav_profile_content_php" id="header_nav_profile_content_php">
                <ul>
                    <li><a href="./profile.php">Профіль</a></li>
                    <li><a href="./exit.php">Вихід</a></li>
                </ul>
            </div>

            <div class="header_nav_profile">
                <a href="#" id="link_profile_php">
                    <span style="align-self: center; font-size: 17px;">
                        <?= $_COOKIE['user'] ?>
                    </span>
                    <img src="./pictures/monke.png">
                </a>
            </div>
            <?php ?>

        </div>
    </div>

    <div class="header_menu_bg">
        <div class="header_menu header_menu_php">
            <a class="header_menu_logo" href="./main.php">
                <span>Game</span>
                <span>Haven</span>
            </a>

            <img class="smart_monke" src="https://i.gifer.com/1FA.gif" alt="">
        </div>
    </div>

    <div class="main_container">
        <div class="left_content">
            <div class="infonew">Профіль</div>

            <span class="left_content_span">Нікнейм:
                <?= $_COOKIE['user'] ?>
            </span>
            <span class="left_content_span">Логін:
                <?= $_COOKIE['cookieLogin'] ?>
            </span>
            <?php if ($_COOKIE['witcher3_key']): ?>
                <span class="left_content_span">Ваш ключ (після виходу з облікового запису він зникне) до The Witcher 3:
                    Wild Hunt -
                    <?= $_COOKIE['witcher3_key'] ?>
                </span>
            <?php endif; ?>
        </div>

        <div class="right_content right_content_profile">
            <center>
                <div class="name_list">Категорії</div>
            </center>

            <ul class="right_list">
                <li><a href="">Гонки</a></li>
                <li><a href="">Стратегії</a></li>
                <li><a href="">Екшен</a></li>
                <li><a href="">Стелс</a></li>
                <li><a href="">Спортивні</a></li>
                <li><a href="">Гонки</a></li>
                <li><a href="">Стратегії</a></li>
                <li><a href="">Екшен</a></li>
                <li><a href="">Стелс</a></li>
                <li><a href="">Спортивні</a></li>
                <li><a href="">Гонки</a></li>
                <li><a href="">Стратегії</a></li>
                <li><a href="">Екшен</a></li>
                <li><a href="">Стелс</a></li>
                <li><a href="">Спортивні</a></li>
                <li><a href="">Гонки</a></li>
                <li><a href="">Стратегії</a></li>
                <li><a href="">Екшен</a></li>
                <li><a href="">Стелс</a></li>
                <li><a href="">Спортивні</a></li>
            </ul>
        </div>
    </div>

    <div class="footer_bg">
        <div class="footer">
            <ul class="footer_list">
                <li>
                    <a href="https://t.me/Ruslan_perep">Зв'язатися з Райаном Гослінгом</a>
                </li>
                <li>
                    <a href="https://t.me/Billy_Harrington">Зв'язатися з Вадимом</a>
                </li>
            </ul>

            <a href="#top">Піднятися вгору ↑</a>
        </div>
    </div>

    <script src="./js/script.js"></script>
    <script src="./js/script_php.js"></script>
    <script src="./js/error_auth.js"></script>
</body>

</html>