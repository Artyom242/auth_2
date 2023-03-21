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
<?php $_SESSION['email'] = $_POST['email']; ?>
<form action="/email/index.php" method="post">
    <input type="email" name="email" placeholder="Введите email">
    <input type="submit">
</form>
<a href="/email/test.php">test</a>
</body>
</html>