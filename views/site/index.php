<?php include ROOT.'/views/layouts/header.php'?>


        <div class="content">

            <?php
            if(isset($Allnews) && !empty($Allnews)):
            foreach ($Allnews as $new):?>
            <div class="newsblock">
                <div class="newstitle"><a href="#"><?php echo $new['title'];?></a></div>
                <div class="newsdate"><?php echo date('d.m.Y',$new['date']);?></div>
                <div class="newsauthor">от <?php echo $new['author'];?></div>
                <div class="newscontent">
                    <p>
                        <?php echo $new['description'];?>
                    </p>
                    <div class="newsbutton"><a href="/site/viewnew">Читать полностью</a></div>
                </div>

            </div>
            <?php endforeach;
            endif;
            ?>



        </div>
        </div>

    
    <script type="text/javascript" src="/template/js/friends.js"></script>
<script src="/template/js/msgalert.js"></script>
</body>
</html>