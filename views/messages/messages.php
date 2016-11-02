<?php include ROOT.'/views/layouts/header.php'?>

    <div class="messageblock">
        <?php if(!empty($friend) && is_array($friend)):?>
            <div class="yousaid">Вы переписываетесь с <?php echo $friend['firstname']." ".$friend['lastname'] ; ?></div>
        <?php
        else: echo '<div class="yousaid">Для начала беседы <a href="/friends">выберите друга</a></div>';
        endif;?>
        <div class="messagefor" id="messagefor">
            <div class="scrolling">

            <?php
            if(!empty($messages) && is_array($messages))
                foreach ($messages as $message):?>
                    <p><?php echo $message['author']['firstname']. ': ' .$message['message']['text'];?></p>
                <?php endforeach;?>
            </div>
        </div>
        <form action="/messages" method="post">
            <div class="messageposttext"><textarea name="message" placeholder="Введите сообщение..."></textarea></div>
            <div class="messagepost"><input type="submit" name="send" value="Отправить"></div>
        </form>
    </div>
</div>
<script src="/template/js/refreshmsg.js"></script>
</body>
</html>