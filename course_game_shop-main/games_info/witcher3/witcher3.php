<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game haven: Відьмак 3: Дикий Гін</title>
    <link rel="stylesheet" href="/course_game_shop-main/style.css">
    <link rel="stylesheet" href="/course_game_shop-main/style.scss">
    <link rel="icon" href="/course_game_shop-main/pictures/monke.png">
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

                <form action="/course_game_shop-main/php/payment_reaction.php" method="post">
                    <div style="padding: 7px 4px 2px 4px;">
                        <label for="number">Номер карти:</label>
                    </div>
                    <input type="text" name="number" id="number" maxlength="16" pattern="[0-9]{16}" required>

                    <div style="padding: 7px 4px 2px 4px;">
                        <label for="term">Термін дії:</label>
                    </div>
                    <input type="text" name="term" maxlength="5" pattern="(1[0-2]|0[1-9])/[2][3-9]" required>

                    <div style="padding: 7px 4px 2px 4px;">
                        <label for="pass">CVV2:</label>
                    </div>
                    <input type="password" name="pass" maxlength="3" pattern="[0-9]{3}" required>

                    <div style="text-align: center;">
                        <input type="submit" value="Купити">
                    </div>
                </form>
            </div>
        </div>
    <?php else:
        if (count($user) == 0) {
            header('Location:/course_game_shop-main/php/main.php?error=pay_user_not_found');
        } ?>

    <?php endif ?>

    <div class="header_nav_bg">
        <?php
        if (isset($_GET['error']) && $_GET['error'] === 'key_exists') {
            echo '<div class="error_message" id="error_key_exists"><span>Ви вже купили цю гру!
            <center><a href="#" id="link_key_exists">Ок</a></span></center></div>';
        }
        ?>

        <div class="header_nav">
            <ul class="header_nav_list">
                <li>
                    <a href="/course_game_shop-main/php/main.php">
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

            <div class="header_nav_profile_content header_nav_profile_content_php" id="header_nav_profile_content_php">
                <ul>
                    <li><a href="/course_game_shop-main/php/profile.php">Профіль</a></li>
                    <li><a href="/course_game_shop-main/php/exit.php">Вихід</a></li>
                </ul>
            </div>

            <div class="header_nav_profile">
                <a href="#" id="link_profile_php">
                    <span style="align-self: center; font-size: 17px;">
                        <?= $_COOKIE['user'] ?>
                    </span>
                    <img src="/course_game_shop-main/pictures/monke.png">
                </a>
            </div>
        </div>
    </div>

    <div class="header_menu_bg">
        <div class="header_menu header_menu_php">
            <a class="header_menu_logo" href="/course_game_shop-main/php/main.php">
                <span>Game</span>
                <span>Haven</span>
            </a>

            <img class="smart_monke" src="https://i.gifer.com/1FA.gif" alt="">
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
                    <a href="/course_game_shop-main/games_info/witcher3/rating-.php">-</a>
                    <span>
                        <?php
                        // Підключення до бази даних
                        $mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');

                        // Перевірка з'єднання
                        if ($mysql->connect_error) {
                            die('Помилка підключення до бази даних: ' . $mysql->connect_error);
                        }

                        // Отримання значень поля "rating" з таблиці
                        $result = $mysql->query("SELECT `rating` FROM `witcher`");
                        // Ініціалізація змінних для обчислення середнього значення
                        $totalRating = 0;

                        $totalCount = 0;
                        // Перебір результатів запиту та обчислення загальної суми і кількості значень
                        while ($row = $result->fetch_assoc()) {
                            $rating = $row['rating'];
                            $totalRating += $rating;
                            $totalCount++;
                        }
                        // Розрахунок середнього значення
                        $averageRating = (($totalCount > 0) ? $totalRating / $totalCount : 0) * 10;

                        // Виведення результату
                        $averageRatingWithLiimit = number_format($averageRating, 2);
                        echo "$averageRatingWithLiimit/10";

                        // Закриття з'єднання з базою даних
                        $mysql->close();
                        ?>
                    </span>
                    <a href="/course_game_shop-main/games_info/witcher3/rating+.php">+</a>
                </div>
            </div>

            <div class="infonew infogame">Опис гри: </div>

            <div class="game_description">
                Опис гри
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
            <ul class="footer_list">
                <li>
                    <a href="https://t.me/Ruslan_perep">Зв'язатися з Райаном Гослінгом</a>
                </li>
                <li>
                    <a href="https://t.me/Billy_Harrington">Зв'язатися з Владом</a>
                </li>
            </ul>

            <a href="#top">Піднятися вгору ↑</a>
        </div>
    </div>

    <script src="/course_game_shop-main/js/script.js"></script>
    <script src="/course_game_shop-main/js/script_php.js"></script>
    <script src="/course_game_shop-main/js/open_pay_content.js"></script>
    <script src="/course_game_shop-main/js/close_pay_content.js"></script>
    <script src="/course_game_shop-main/js/error_key_exists.js"></script>
</body>

</html>