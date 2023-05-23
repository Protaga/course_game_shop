<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);

  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);

  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 6 || mb_strlen($login) > 64){
    echo "Помилка! Логін має бути від 6 до 20 символів";
    exit;
  }
  if(mb_strlen($pass) < 8 || mb_strlen($pass) > 32){
    echo "Помилка! Пароль має бути від 8 до 32 символів";
    exit;
  }

  if(mb_strlen($name) < 3 || mb_strlen($name) > 20){
    echo "Помилка! Ім'я має бути від 3 до 20 символів";
    exit;
  }

  $mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');
  $result = $mysql->query("SELECT * FROM `game_haven_users`
  WHERE `login` = '$login'");

  $user = $result->fetch_assoc();
  $mysql->close();
  if(count($user) == 0) {
    $pass = md5($pass);

    $mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');
    $mysql->query("INSERT INTO `game_haven_users` (`login`, `pass`, `name`)
    VALUES('$login', '$pass', '$name')");
    $mysql->close();
    $mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');
    $result = $mysql->query("SELECT * FROM `game_haven_users`
    WHERE `login` = '$login' AND `pass` = '$pass'");

    $user = $result->fetch_assoc();

    if(count($user) == 0) {
      echo "Такого користувача не знайдено!";
      exit;
    }

    setcookie('user', $user['name'], time() + 60*60, "/");

    header('Location: ./main.php');
  }
  else{
    echo "Такий користувач вже існує!";
    exit;
  }
?>
