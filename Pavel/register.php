

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>name</label>
        <input type="text" name="name" placeholder="Введите свое полное имя">
        <label>surname</label>
        <input type="text" name="surname" placeholder="Введите свою фамилию">
        <label>patronymic</label>
        <input type="text" name="patronymic" placeholder="Введите свое отчество(если есть)">
        <label>login</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>email</label>
        <input type="email" name="email" placeholder="Введите свою почту">
        <label>password</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>password_repeat</label>
        <input type="password" name="password_repeat" placeholder="Подтвердите пароль">
        <button type="submit">Зарегистририроваться!</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
       
    </form>

</body>
</html>