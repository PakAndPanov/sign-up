<?php include ROOT.'/views/layouts/header.php'?>
<div class="contentprofile">
    <div class="profileavatar block">
        <img src="/template/img/avatar.jpg">
        <div class="profileavatar edit"><a href="#">Изменить аву</a></div>
        <div class="profile sendmsg"><a href="#">Написать сообщение</a></div>
        <div class="profile myaudio"><a href="#">Мои аудиозаписи</a></div>
    </div>

    <div class="profile block">
        <div class="profileheader">
            <h2><?php echo $user['firstname'];?> <?php echo $user['lastname'];?></h2>
            <a href="">Добавить в друзья</a>
        </div>
        <div class="profileinfoleft">
            <p>День рождения:</p>
            <p>Город:</p>
        </div>
        <div class="profileinforight">
            <p><?php echo date('d.m.Y',$user['birth_date']);?></p>
            <p><?php echo $user['city'];?></p>
        </div>
    </div>
</div>
</div>
<script src="/template/js/msgalert.js"></script>
</body>
</html>