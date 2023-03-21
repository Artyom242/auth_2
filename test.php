<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/index.php" method="post">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="password" name="password" placeholder="Пароль">
    <input type="email" name="email" placeholder="Введите email" value="<?php if (!empty($_SESSION['email'])){echo $_SESSION['email'];} ?>">
    <input type="submit">
</form>
</body>
</html>
