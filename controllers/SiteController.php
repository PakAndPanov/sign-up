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
            if(!User::Logedin()) {header("Location:/");exit();}
            $Allnews=Site::getAllNews();

            require_once  ROOT.'/views/site/index.php';
        return true;
    }

    public function actionviewnew(){

        if(!User::Logedin()) {header("Location:/");exit();}
        require_once ROOT.'/views/news/news.php';
        return true;
    }
    
    


}