<?php
  setcookie('user', $user['name'], time() - 60*60, "/");
  header('Location: /main.php')
?>
