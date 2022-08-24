<?php

    session_start();
    require_once 'connect.php';

    

    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
    {

    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = 'Такой почты нет!!';
        header('Location: ../register.php');
    }

    $select = mysqli_query($connect, "SELECT `email` FROM `users` WHERE `email` = '". $email ."'") or exit(mysqli_error($connect));
    if(mysqli_num_rows($select)) {
            $_SESSION['message'] = 'Данная почта уже зарегистрирована!';
            header('Location: ../register.php');     
            exit();
    }


        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../login.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../register.php');
    }



?>