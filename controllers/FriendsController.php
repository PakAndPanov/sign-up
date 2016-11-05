<?php

/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 01.11.2016
 * Time: 0:23
 */
class FriendsController
{
    public function actionIndex(){
        if(!User::Logedin()) header("Location:/");
        $strfriends=User::getFriendsByUser($_SESSION['user']['id']);
        if($strfriends){
            $arrfriends= $strfriends;
            $friends=User::getInfoFriends($arrfriends);
        }
        require_once ROOT.'/views/friends/friends.php';
        return true;
    }

    public function actionAdd($id){
        if(!User::Logedin()) {header("Location:/"); exit();}
        $id=intval(htmlspecialchars($id));
        if(is_int($id)){
            User::addUserToFriend($id);
        }
        header('Location: /friends');
        return true;
    }

    public function actionSearch(){

       if(!User::Logedin()) header("Location:/");

       require_once ROOT.'/views/friends/find.php';
        return true;
    }

    public function actionDelete($id){
        if(!User::Logedin()) header("Location:/");
        if(User::deleteUserFromFriend($id))
            header('Location: /friends');

        return true;
    }

    public static function actionRefreshsearchfriends(){
        if(!User::Logedin()) {header("Location:/"); exit();}
        if(isset($_POST['text'])){
            $searchtext=htmlspecialchars($_POST['text']);
        };
        $users=User::getFriendsByName($searchtext);

        foreach ( $users as $user) {
            if($user['id']!=$_SESSION['user']['id']){
            echo '<div class="friendsblockfind">' . '
              <img src="/template/img/avatar.jpg">' . '
              <div class="friendsinfofind"><a href="/id'.$user['id'].'" class="friendsnamefind">'.$user["firstname"].' '.$user["lastname"]. '</a> 
              <div class="friendsgofind">
                <a href="/friends/add/'.$user['id'].'" class="friendaddfind">Добавить в друзья</a>
              </div>
              </div>
              </div>
';

        }
        }
        return true;
    }
}