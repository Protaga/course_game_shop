<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game haven: Відьмак 3: Дикий Гін</title>
    <link rel="stylesheet" href="/course_game_shop-main/style.css">
    <link rel="stylesheet" href="/course_game_shop-main/style.scss">
</head>

<body>
    <span id="top"></span>
    <?php
    if ($_COOKIE['user']):
        ?>
    <div class="pay_form_bg" id="pay_content">
        <div class="pay_form">
            <div class="cross_container_bg">
                <a href="#" class="cross_container" id="close_cross_container">
                    <div>
                        <div class="horizontal_line"></div>
                        <div class="vertical_line"></div>
                    </div>
                </a>
            </div>

            <form action="../../payment_reaction.php" method="post">
                <div style="padding: 7px 4px 2px 4px;">
                    <label for="number">Номер карти:</label>
                </div>
                <input type="text" name="number" id="number" minlength="16" maxlength="16" required>

                <div style="padding: 7px 4px 2px 4px;">
                    <label for="term">Термін дії:</label>
                </div>
                <input type="text" name="term" minlength="5" maxlength="5" required>

                <div style="padding: 7px 4px 2px 4px;">
                    <label for="pass">CVV2:</label>
                </div>
                <input type="password" name="pass" minlength="3" maxlength="3" required>

                <div style="text-align: center;">
                    <input type="submit" value="Купити">
                </div>
            </form>
        </div>
    </div>
    <?php else: ?>
    <div class="">
    TODO
    ,piobukhsvdbfsb
    </div>
    <?php endif?>

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
                    <a href="/course_game_shop-main/main.php">
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
                    <form action="/course_game_shop-main/authorization.php" method="post">
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
                            <a href="/course_game_shop-main/registration_form.php">Реєстрація</a>
                        </div>
                    </form>
                </div>

                <div class="header_nav_profile">
                    <a href="#" id="link_profile">
                        <span>Увійти
                            <span>Зареєструватись</span>
                        </span>
                        <img src="/course_game_shop-main/pictures/noavatar.png">
                    </a>
                </div>
            <?php else: ?>
                <div class="header_nav_profile_content header_nav_profile_content_php" id="header_nav_profile_content_php">
                    <ul>
                        <li><a href="/course_game_shop-main/profile.php">Профіль</a></li>
                        <li><a href="/course_game_shop-main/exit.php">Вихід</a></li>
                    </ul>
                </div>

                <div class="header_nav_profile">
                    <a href="#" id="link_profile_php">
                        <span style="align-self: center; font-size: 17px;">
                            <?= $_COOKIE['user'] ?>
                        </span>
                        <img src="/course_game_shop-main/pictures/noavatar.png">
                    </a>
                </div>
            <?php endif; ?>

        </div>
    </div>

    <div class="header_menu_bg">
        <div class="header_menu header_menu_php">
            <a class="header_menu_logo" href="/course_game_shop-main/main.php">
                <span>Game</span>
                <span>Haven</span>
            </a>
        </div>
    </div>

    <div class="main_container">
        <div class="left_content left_content_game_info">
            <div class="infonew">The Witcher 3: Wild Hunt (Відьмак 3: Дикий Гін)</div>

            <img src="/course_game_shop-main/pictures/witcher3_main.png" alt="">

            <div class="game_info">
                <span class="left_content_span">Дата виходу: 18 травня 2015 рік</span>
                <span class="left_content_span">Жанр: RPG, 3D, 3rd Person</span>
                <span class="left_content_span">Розробник: CD Projekt RED и CD Projekt RED Kraków</span>
                <span class="left_content_span">Видавництво: Namco Bandai Games</span>
                <span class="left_content_span">Платформа: PC, PS5, X-Box, Nintendo Switch</span>
                <span class="left_content_span">Мова інтерфейсу: російська, англійська</span>
                <span class="left_content_span">Ціна: 100грн</span>

                <p>СИСТЕМНІ ВИМОГИ:</p>
                <span class="left_content_span">Операційна система: 7, 8, 10 (64bit)</span>
                <span class="left_content_span">Процесор: Intel Core i5-2500K 3.3GHz / AMD Phenom II X4 940</span>
                <span class="left_content_span">Оперативна пам'ять: 6 GB ОЗП</span>
                <span class="left_content_span">Відеокарта: Nvidia GeForce GTX 660 / Radeon HD 7870</span>
                <span class="left_content_span">Місце на диску: 56 GB</span>

                <div class="button_pay_bg">
                    <div class="button_pay">
                        <a href="#" id="open_cross_container">Купити ключ за 100грн</a>
                    </div>
                </div>
            </div>

            <div class="rating_bg">
                <div class="rating">
                    <a href="">-</a>
                    <span>0</span>
                    <a href="">+</a>
                </div>
            </div>

            <div class="infonew infogame">Опис гри: </div>

            <div class="game_description">
                уцацуааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааааацуацуацуацуацуацуацуацуацуауцацуацууууууууууууууууууууууууууууууууууууууууууууууууууууууууууу
            </div>

            <div class="infonew infogame" style="margin-top: 50px">Трейлер (посилання на відео Youtube): </div>

            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                <img src="./pictures/horse_on_house.png" alt="" style="width: 560px; height: 315px">
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

    <div class="footer_bg">
        <div class="footer">
            <a href="#top">Піднятися вгору ↑</a>
        </div>
    </div>

    <script src="/course_game_shop-main/js/script.js"></script>
    <script src="/course_game_shop-main/js/script_php.js"></script>
    <script src="/course_game_shop-main/js/error_auth.js"></script>
    <script src="/course_game_shop-main/js/open_pay_content.js"></script>
    <script src="/course_game_shop-main/js/close_pay_content.js"></script>
</body>

</html>
