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
                if($_COOKIE['user'] == ''):
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
                        <a href="./registration.html">Реєстрація</a>
                    </div>
                </form>
            </div>
            <?php else: ?>
              <div>
             <p> Вітаю, <?=$_COOKIE['user']?>  <p>
                <a href= "./exit.php">Вихід</p>
                </div>
            <?php  endif; ?>

            <?php
                if($_COOKIE['user'] == ''):
             ?>
            <div class="header_nav_profile">
                <a href="#" id="link_profile">              
                    <span>Увійти 
                        <span>Зареєструватись</span>
                    </span>  
                    <img src="./pictures/noavatar.png">
                </a> 
            </div>
            <?php  endif; ?>
        </div>
    </div>

    <div class="header_menu_bg">
        <div class="header_menu">
            <a class="header_menu_logo" href="./main.php">
                <span>Game</span>
                <span>Haven</span>
            </a>

            <div class="header_search">
                <form method="post">
                    <input type="text" placeholder="Пошук гри">
                </form>
            </div>
        </div>
    </div>

    <div class="main_container">
        <div class="left_content">
            <div class="infonew">Нове на сайті</div>

            <a class="game_ref" href="./games_info/witcher3/witcher3.html">
                <img src="./pictures/witcher3_main.png" alt=""> <br>
                <span>The Witcher 3: Wild Hunt</span>
            </a>
            <a class="game_ref" href="./games_info/witcher3/witcher3.html">
                <img src="./pictures/witcher3_main.png" alt=""> <br>
                <span>The Witcher 3: Wild Hunt</span>
            </a>
            <a class="game_ref" href="./games_info/witcher3/witcher3.html">
                <img src="./pictures/witcher3_main.png" alt=""> <br>
                <span>The Witcher 3: Wild Hunt</span>
            </a>
            <a class="game_ref" href="./games_info/witcher3/witcher3.html">
                <img src="./pictures/witcher3_main.png" alt=""> <br>
                <span>The Witcher 3: Wild Hunt</span>
            </a>
            <a class="game_ref" href="./games_info/witcher3/witcher3.html">
                <img src="./pictures/witcher3_main.png" alt=""> <br>
                <span>The Witcher 3: Wild Hunt</span>
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

    <script src="./script.js"></script>
</body>
</html>