<?php
setcookie('user', $user['name'], time() - 60 * 60 * 12, "/");
setcookie('cookieLogin', $user['login'], time() - 60 * 60 * 12, "/");
setcookie('witcher3_key', $user['witcher3_key'], time() - 60 * 60 * 12, "/");

header('Location: ./main.php')
  ?>