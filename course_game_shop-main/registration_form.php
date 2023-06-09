<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game haven: реєстрація</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style.scss">
    <link rel="icon" href="./pictures/monke.png">
</head>

<body>
    <span id="top"></span>

    <div class="header_nav_bg">
        <?php
        if (isset($_GET['error']) && $_GET['error'] === 'user_is_exists') {
            echo '<div class="error_message" id="error_auth"><span>Такий користувач вже існує!
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
        </div>
    </div>

    <div class="header_menu_bg">
        <div class="header_menu">
            <a class="header_menu_logo" href="./main.php">
                <span>Game</span>
                <span>Haven</span>
            </a>

            <img class="smart_monke_reg" src="https://i.gifer.com/1FA.gif" alt="">
        </div>
    </div>

    <div class="main_container">
        <div class="left_content">
            <div class="infonew">Реєстрація</div>
            <form action="./registration.php" method="post">
                <label for="name">Нікнейм:</label> <br>
                <input type="text" name="name" id="name" maxlength="20" required>
                <br>
                <label for="login">Логін:</label> <br>
                <input type="text" name="login" id="login" minlength="6" maxlength="32" required>
                <br>
                <label for="pass">Пароль:</label> <br>
                <input type="password" name="pass" id="pass" minlength="8" maxlength="32" required>
                <br>
                <input type="submit" class="reg_submit" value="Зареєструватись">
            </form>

        </div>

        <div class="right_content right_content_reg">
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
    <script src="./js/error_auth.js"></script>
</body>

</html>