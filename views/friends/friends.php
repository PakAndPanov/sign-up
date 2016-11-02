<?php include_once ROOT.'/views/layouts/header.php'?>
<div class="friendsblock">
        <div class="friendlist">
            <div class="friendstop">
                <h2>Список друзей</h2>
                <a href="/friends/search">Найти друга</a>
            </div>
            <?php
            if(isset($friends) && !empty($friends)):
                foreach ($friends as $friend): ?>

                        <div class="friendsblockresult">
                            <img src="/template/img/avatar.jpg">
                            <div class="friendsname"><?php echo $friend['firstname'];?> <?php echo $friend['lastname'];?></div>
                            <div class="friendsgo">
                                <form action="/messages" method="post">
                                    <input type="submit" name="submit" value="Написать сообщение">
                                    <input type="hidden" name="friend" value="<?php echo $friend['id'];?>">
                                </form>
                                <div class="deletefriend"><a href="#">Удалить из друзей</a></div>
                            </div>
                        </div>

                <?php endforeach;
            else: echo '<p>У вас пока нет друзей</p>';
            endif;
            ?>

        </div>
</div>
</body>
</html>