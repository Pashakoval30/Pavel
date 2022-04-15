<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?></h2>
      
        <a href="vendor/logout.php" class="logout">Выход</a>
        <a class="nav__link" href="products/index.php">Заказы</a>
        <a class="nav__link" href="#">О нас</a>
        <a class="nav__link" href="glav.php">Главная</a>
    </form>

</body>
</html>