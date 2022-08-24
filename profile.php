<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <link rel="stylesheet" href="style/profile.css" />
</head>
<body
<tag>
<method="" form class="box">
    <h2>Вы вошли как: <?= $_SESSION['user']['login'] ?> (Поддтвердите аккаунт через сообщение на почте)</h2>

    </div>
    <p>

        <button name="Player">Список Пользователей</button>


    <form action="vendor/logout.php" method="POST">
        <button>Выйти</button>


        
    </form>
</tag>

<tag>
<method="" form class="boxchat">

<h3>Глобальный Чат</h3>
        
</tag>

<form action="">
    <div class="chat-resault" id="chat-resault">
    
    </div>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="script/script.js"></script>
</body>
</html>