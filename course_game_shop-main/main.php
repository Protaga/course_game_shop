<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game haven</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style.scss">
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

            <?php
            if ($_COOKIE['user'] == ''):
                ?>
                <div class="header_nav_profile_content" id="header_nav_profile_content">
                    <form action="./authorization.php" method="post">
                        <div style="padding: 7px 4px 2px 4px;">
                            <label for="login">Логін:</label>
                        </div>
                        <input type="text" name="login" required>

                        <div style="padding: 7px 4px 2px 4px;">
                            <label for="pass">Пароль:</label>
                        </div>
                        <input type="password" name="pass" required>

                        <div style="text-align: center;">
                            <input type="submit" value="Увійти">
                            <br>
                            <a href="./registration_form.php">Реєстрація</a>
                        </div>
                    </form>
                </div>

                <div class="header_nav_profile">
                    <a href="#" id="link_profile">
                        <span>Увійти
                            <span>Зареєструватись</span>
                        </span>
                        <img src="./pictures/noavatar.png">
                    </a>
                </div>
            <?php else: ?>
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
                        <img src="./pictures/noavatar.png">
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <div class="header_menu_bg">
        <div class="header_menu header_menu_php">
            <a class="header_menu_logo" href="./main.php">
                <span>Game</span>
                <span>Haven</span>
            </a>

            <div class="header_search">
                <form method="post">
                    <input type="text" id="searchInput" placeholder="Пошук гри">
                </form>
            </div>
        </div>
    </div>

    <div class="main_container">
        <div class="left_content">
            <div class="infonew">Нове на сайті</div>

            <a class="game_ref" href="./games_info/witcher3/witcher3.php">
                <img src="./pictures/witcher3_main.png" alt=""> <br>
                <span>The Witcher 3: Wild Hunt</span>
            </a>
            <a class="game_ref" href="./games_info/witcher2/witcher2.php">
                <img src="./pictures/witcher2_main.png" alt=""> <br>
                <span>The Witcher 2</span>
            </a>
            <a class="game_ref" href="">
                <img src="./pictures/witcher3_main.png" alt=""> <br>
                <span>The Witcher 1</span>
            </a>
            <a class="game_ref" href="">
                <img src="./pictures/witcher3_main.png" alt=""> <br>
                <span>GTA 5</span>
            </a>
            <a class="game_ref" href="">
                <img src="./pictures/witcher3_main.png" alt=""> <br>
                <span>GTA 4</span>
            </a>
        </div>

        <div class="right_content">
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

    <div class="bottom_container_bg">
        <div class="bottom_container">
            <a href="">Дивитися всі ігри</a>
        </div>
    </div>

    <div class="footer_bg">
        <div class="footer">
            <a href="#top">Піднятися вгору ↑</a>
        </div>
    </div>

    <script src="./js/script.js"></script>
    <script src="./js/script_php.js"></script>
    <script src="./js/error_auth.js"></script>
    <script src="./js/search.js"></script>
</body>

</html>