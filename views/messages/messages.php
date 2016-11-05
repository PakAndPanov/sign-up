<?php include ROOT.'/views/layouts/header.php'?>

    <div class="messageblock">
        <?php if(!empty($friend) && is_array($friend)):?>
            <div class="yousaid">Вы переписываетесь с <span><?php echo $friend['firstname']." ".$friend['lastname'] ; ?></span></div>
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
            <div class="messageposttext"><textarea name="message" placeholder="Начните вводить сообщение..."></textarea></div>
            <div class="messagepost"><input type="submit" name="send" value="Отправить"></div>
        </form>
    </div>

    <?php if(isset($unreadmsg)):
        ?>
    <div class="unread">
        <h1>Непрочитанные сообщения</h1>
        <?php foreach ($unreadmsg as $i=>$msg):
        if(empty($friend) || $msg['author_id'] !=$friend['id'] ):
            ?>
        <div class="unreadfriend">
            <img src="/template/img/avatar.jpg">
            <div class="unreadmsg"><?php echo $msg['count'].' непрочитанных сообщений от:';?></div>
            <div class="unreadname"><?php echo $author[$i]['firstname'].' '.$author[$i]['lastname'];?></div>
            <form action="/messages" method="post">
                <input type="submit" name="submit" value="Перейти к сообщению">
                <input type="hidden" name="friend" value="<?php echo $msg['author_id'];?>">
            </form>
        </div>

    <?php
    endif;?>
    </div><?php
        endforeach;
             endif;

    if(isset($friends) && !empty($friends)):?>
    <div class="unread">
    <h1>Написать друзьям</h1>
        <?php
    foreach ($friends as $friend): ?>
        <div class="unreadfriend">
            <img src="/template/img/avatar.jpg">
            <div class="unreadname"><?php echo $friend['firstname'].' '.$friend['lastname'];?></div>
            <form action="/messages" method="post">
                <input type="submit" name="submit" value="Написать сообщение">
                <input type="hidden" name="friend" value="<?php echo $friend['id'];?>">
            </form>
        </div>

    <?php
    endforeach;
        ?>
    </div>

        <?php
    endif;
    ?>
</div>
<script src="/template/js/refreshmsg.js"></script>
<script src="/template/js/msgalert.js"></script>

</body>
</html>