<?php
$mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');
$login = $_COOKIE['cookieLogin'];

$result = $mysql->query("SELECT * FROM `witcher`
  WHERE `login` = '$login'");

$user = $result->fetch_assoc();

if (count($user)) {
  $result = $mysql->query("DELETE FROM `witcher`
    WHERE `login` = '$login'");
}
$mysql->query("INSERT INTO `witcher` (`login`, `rating`)
 VALUES('$login', '0')");
$mysql->close();
header('Location: /course_game_shop-main/games_info/witcher3/witcher3.php');
?>