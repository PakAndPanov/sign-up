<?php include ROOT.'/views/layouts/header.php'?>

    <div class="messageblock">
        <?php if(!empty($friend) && is_array($friend)):?>
            <div class="yousaid">Вы переписываетесь с <?php echo $friend['firstname']." ".$friend['lastname'] ; ?></div>
        <?php
        else: echo '<div class="yousaid">Для начала беседы <a href="/friends">выберите друга</a></div>';
        endif;?>
        <div class="messagefor">
            <div class="scrolling" id="messagefor">

            <?php
            if(!empty($messages) && is_array($messages))
                foreach ($messages as $message):?>
                    <p><div class="messageauthor"><?php echo $message['author']['firstname']?></div><div class="messagetext"><?php echo $message['message']['text'];?></div></p>
                <?php endforeach;?>
            </div>
        </div>
        <form action="/messages" method="post">
            <div class="messageposttext"><textarea name="message" placeholder="Введите сообщение..."></textarea></div>
            <div class="messagepost"><input type="submit" name="send" value="Отправить"></div>
        </form>
    </div>

    <div class="unread">
        Непрочитанные сообщения от:
        <div class="unreadfriend">
            <img src="/template/img/avatar.jpg">
            <div class="unreadname">Ваня</div>
            <a href="">Перейти к сообщению</a>
        </div>
        <div class="unreadfriend">
            <img src="/template/img/avatar.jpg">
            <div class="unreadname">Ваня</div>
            <a href="">Перейти к сообщению</a>
        </div>
        <div class="unreadfriend">
            <img src="/template/img/avatar.jpg">
            <div class="unreadname">Ваня</div>
            <a href="">Перейти к сообщению</a>
        </div>
    </div>
</div>
<script src="/template/js/refreshmsg.js"></script>
</body>
</html>