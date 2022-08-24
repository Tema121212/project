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
    <title>Авторизация</title>
    <link rel="stylesheet" href="style/style_login.css">
</head>
<body>
    <form action="vendor/signin.php" method="post" form class="box">
        <h1>Добро Пожаловать!</h1>
        <div class="group">
        <label for="">Логин</label>
            <input type="text" name="login"  placeholder="Введите свой логин">
        </div>
        <div class="group">
        <label for="">Пароль</label>
            <input type="password" name="password" placeholder="Введите свой пароль">
        </div>
        <button>Войти</button>
        </div>
        <p>
        Нету аккаунта? - <a href="/register.php">Зарегистрируйтесь</a>
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