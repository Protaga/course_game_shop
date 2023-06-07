<?php
setcookie('user', $user['name'], time() - 60*60*12, "/");
setcookie('cookieLogin', $user['login'], time() - 60*60*12, "/");
setcookie('witcher_key', $user['witcher_key'], time() - 60*60*12, "/");

header('Location: ./main.php')
  ?>
