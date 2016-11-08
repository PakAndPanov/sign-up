<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SignUP</title>
    <meta name="description" content="SignUP" />
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" type="text/css" href="/template/css/style.css">
    <link rel="stylesheet" type="text/css" href="/template/css/friends.css">
    <link rel="stylesheet" type="text/css" href="/template/css/profile.css">
    <link rel="stylesheet" type="text/css" href="/template/css/auth.css">
    <link rel="stylesheet" type="text/css" href="/template/css/reg.css">
    <link rel="stylesheet" type="text/css" href="/template/css/news.css">
    <link rel="stylesheet" type="text/css" href="/template/css/messages.css">
    <script src="/template/js/jquery-3.1.1.min.js"></script>

</head>
<body>
<div class="section">
    <div class="logo"><a href="/"><img src="/template/img/logo.png"></a></div>
    <div class="search">
        <input type="search" placeholder="Ищете кого-нибудь?" required>
        <a href=""><img src="/template/img/search.png"></a>
    </div>
    <div id="authreg">
        <a href="/user/logout">Выход</a>
    </div>
</div>
<div class="wrapper">
    <div class="menu">
        <h1>Меню</h1>
        <a href="/id<?php echo $_SESSION['user']['id']; ?>">Профиль</a>
        <a href="/messages">Сообщения<span style="margin-left: 150px" id="msgcount"></span></a>
        <a href="/friends">Друзья</a>
        <a href="/site">Новости</a>
        <a href="/views/audio/audio.php">Аудиозаписи</a>
    </div>
<div class="friendsblock">
    <div class="friendlist">
        <div class="friendstop">
            <h2>Мои аудиозаписи</h2>
            <a href="/views/audio/audiosearch.php">Искать музыку</a>
        </div>
        <p>У вас пока нет музыки</p>
    </div>
</div>
<script src="/template/js/msgalert.js"></script>
</body>
</html>