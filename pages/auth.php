<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style.css">
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../node_modules/maskedinput/dist/jquery.maskedinput.min.js"></script>
    <title>MeatOn | Авторизация</title>
</head>
<body>
    <?php require "../page_modules/header.php"; ?>
    <main class="authpage">
        <div class="auth">
            <h2 class="auth__header">Авторизация</h2>
            <form action="" method="post">
                <h4 class="label">Е-mail</h4>
                <input class="textinput" type="email" name="mail">
                <h4 class="label">Пароль</h4>
                <input class="textinput" type="password" name="password"><br>
                <div class="buttons">
                    <input class="auth__btn" type="submit" value="Войти">
                    <button type="button" class="auth__btn switch">Регистрация</button>
                </div>
            </form>
        </div>
        <div class="reg">
            <h2 class="auth__header">Регистрация</h2>
            <form action="" method="post">
                <h4 class="label">Е-mail</h4>
                <input class="textinput" type="email" name="mail">
                <h4 class="label">Номер телефона</h4>
                <input class="textinput tel" type="text" name="tel">
                <h4 class="label">Пароль</h4>
                <input class="textinput" type="password" name="password">
                <h4 class="label">Подтверждение пароля</h4>
                <input class="textinput" type="password" name="password_confirm">
                <h4 class="label">Фамилия</h4>
                <input class="textinput" type="text" name="password">
                <h4 class="label">Имя</h4>
                <input class="textinput" type="text" name="password_confirm">
                <h4 class="label">Адрес</h4>
                <input class="textinput" type="text" name="address">
                
                <br>
                <div class="buttons">
                    <input class="auth__btn" type="submit" value="Зарегистрироваться">
                    <button type="button" class="auth__btn switch">Вход</button>
                </div>
            </form>
        </div>
    </main>
    
    
    <script src="../src/js/authpage.js"></script>
</body>
</html>