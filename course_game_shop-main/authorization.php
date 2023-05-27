<?php
$login = filter_var(
  trim($_POST['login']),
  FILTER_SANITIZE_STRING
);

$pass = filter_var(
  trim($_POST['pass']),
  FILTER_SANITIZE_STRING
);

$pass = md5($pass);

$mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');

$result = $mysql->query("SELECT * FROM `game_haven_users`
  WHERE `login` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();

if (count($user) == 0) {
  header('Location: ./main.php?error=user_not_found');
  exit;
}

setcookie('user', $user['name'], time() + 60 * 60 * 12, "/");

$mysql->close();
header('Location: ./main.php');
?>