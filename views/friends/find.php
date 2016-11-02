<?php include_once ROOT.'/views/layouts/header.php'?>
<div class="friendsblock">
    <div class="friendlist">
        <div class="friendstop">
            <h2>Поиск друзей</h2>
        </div>
        <div class="searchfriends">
            <img src="/template/img/search.png">

            <input type="search" placeholder="Введите любое имя, фамилию или слово..." id="search" onkeyup="search()">

        </div>

                <div class="friendscontent" id="test">
                </div>
    </div>
</div>
<script src="/template/js/searchfriends.js"></script>
</body>
</html>