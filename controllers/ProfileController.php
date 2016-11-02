<?php

/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 01.11.2016
 * Time: 0:31
 */
class ProfileController
{
    public function actionIndex($id){
        if(!User::Logedin()) header("Location:/");
        $user=User::getUserById($id);
        if($user)
        require_once ROOT.'/views/site/profile.php';
        else echo 'Форма с аккаунтом нет';
        return true;
    }
}