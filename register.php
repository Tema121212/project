<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <form action="vendor/signup.php" method="post" form class="box">
        <h1>Добро Пожаловать!</h1>
        <div class="group">
            <label for="">Адрес Электронной Почты</label>
            <input type="email" name="email" placeholder="Введите Адрес Электронной почты">
        </div>
        <div class="group">
        <label for="">Логин</label>
            <input type="text" name="login"  placeholder="Введите свой логин">
        </div>
        <div class="group">
        <label for="">Пароль</label>
            <input type="password" name="password"  placeholder="Введите свой пароль">
        </div>
        <div class="group">
        <label for="">Подтверждение Пароль</label>
            <input type="password" name="password_confirm"  placeholder="Подтвердите свой Пароль">
        </div>
        <button>Зарегистрироватся</button>
        </div>
        <p>
            Есть аккаунт? - <a href="/login.php">Войдите</a>
    </p>

</form>

<?php
        if ($_SESSION['message']) {
            echo '<div class="box2"> ' . $_SESSION['message'] . ' </div>';
        }
        unset($_SESSION['message']);
        
    ?>

</body>
</html>