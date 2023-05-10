<html>
    <head>
    <title>Реєстрація</title>
    </head>
    <body>
    <h2>Реєстрація</h2>
    <form action="save_user.php" method="post">
    <!--**** save_user.php - адреса для обробки. ***** -->
<p>
    <label>Ваш логін:<br></label>
    <input name="login" type="text" size="16" maxlength="16">
    </p>
<!--**** В текстове поле (name="login" type="text") користувач вводить свій логін ***** -->
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="32" maxlength="32">
    </p>
<!--**** В полі для паролів (name="password" type="password") користувач вводить свій пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Зареєструватися">
<!--**** Кнопка (type="submit") відправляє дані на save_user.php ***** --> 
</p></form>
    </body>
    </html>