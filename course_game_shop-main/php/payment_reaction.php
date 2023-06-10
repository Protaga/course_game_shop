<?php
$mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');
$login = $_COOKIE['cookieLogin'];
$result = $mysql->query("SELECT * FROM `witcher3_user_keys`
  WHERE `login`= '$login'");
$mysql->close();
$user = $result->fetch_assoc();
if(count($user) == ''){
  // $number = $_POST['number'];
  // $term = $_POST['term'];
  // $pass = $_POST['pass'];
  // //умовне пересилання данних на сайт оплати та відповідь
  // //.....
  // //тут має бути умова проходження оплати, якщо б вона була реальна
  // if(true) $payment = 1;
  // if($payment){
  // //  $mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');
  // }
  $mysql = new mysqli('localhost', 'ADMIN', 'ADMIN', 'ADMIN');
  $result = $mysql->query("SELECT * FROM `witcher3_keys`
    WHERE `id`= (SELECT MIN(id) FROM `witcher3_keys`)");
  $subQuery = $mysql->query("SELECT MIN(id) FROM `witcher3_keys`");


  $row = $subQuery->fetch_row();

  $minId = $row[0];

  $user = $result->fetch_assoc();
   //  if (count($user) == 0) {
   //    header('Location: ./main.php?error=pay_user_not_found');
   //    exit;
   //  }

  setcookie('witcher3_key', $user['witcher3_key'], time() + 60 * 60 * 12, "/");
  $witcher3_key = $user['witcher3_key'];

  $result = $mysql->query("INSERT INTO `witcher3_user_keys` (`login`, `using_key`)
  VALUES ('$login', '$witcher3_key')");




  $result = $mysql->query("DELETE FROM `witcher3_keys` WHERE `id` = $minId");
  header('Location: ./profile.php');
  $mysql->close();
}
else {
  echo "У вас вже є такий товар";
  // сам пропиши помилку, потім розкоментуй хедер.
  //header('Location: /course_game_shop-main/games_info/witcher3/witcher3.php');
}



?>
