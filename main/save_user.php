<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    //заносимо введений користувачем логін в змінну $login, якщо він пустий, то видаляємо змінну
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносимо введений користувачем логін в змінну $password, якщо він пустий, то видаляємо змінну
 if (empty($login) or empty($password)) //якщо користувач не ввів логін чи пароль, то видаємо помилку й зупиняємо скрипт
    {
    exit ("Ви ввели не всю інформацію, поверніться назад та заповніть всі поля!");
    }
    //якщо логін та пароль введені, то обрабляємо їх, щоб теги чи скрипти не працювали, бо люди можуть ввести усяке
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //видаляємо зайві пробіли
    $login = trim($login);
    $password = trim($password);
 // підключаємося до бази
    include ("bd.php");// файл bd.php має бути у тій же папці, що й уся решта, якщо це не так - змініть шлях 
 // перевірка на існування користувача з таким же логіном
    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Вибачте, введений вами логін уже зарееєстрований. Введіть інший логін.");
    }
 // якщо такого немає - зберігаємо дані
    $result2 = mysql_query ("INSERT INTO users (login,password) VALUES('$login','$password')");
    // Перевірка помилок
    if ($result2=='TRUE')
    {
    echo "Вітаємо з вас! Тепер ви можете зайти на сайт. <a href='index.php'>Головна сторінка</a>";
    }
 else {
    echo "Помилка! Не вдалося зареєструватися.";
    }
    ?>