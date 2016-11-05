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
                            <div class="friendsname"><a href="/id<?php echo $friend['id'];?>"><?php echo $friend['firstname'];?> <?php echo $friend['lastname'];?></a> </div>
                            <div class="friendsgo">
                                <form action="/messages" method="post">
                                    <input type="submit" name="submit" value="Написать сообщение">
                                    <input type="hidden" name="friend" value="<?php echo $friend['id'];?>">
                                </form>
                                <div class="deletefriend"><a href="/friends/delete/<?php echo $friend['id']?>">Удалить из друзей</a></div>
                            </div>
                        </div>

                <?php endforeach;
            else: echo '<p>У вас пока нет друзей</p>';
            endif;
            ?>

        </div>
</div>
<script src="/template/js/msgalert.js"></script>
</body>
</html>