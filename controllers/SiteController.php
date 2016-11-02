<?php

/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 30.10.2016
 * Time: 19:14
 */
class SiteController
{
        public function actionIndex(){
            if(!User::Logedin()) header("Location:/");
            require_once  ROOT.'/views/site/index.php';
        return true;
    }


}