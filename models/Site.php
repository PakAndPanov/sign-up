<?php

/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 05.11.2016
 * Time: 12:14
 */
class Site
{
    public static function getAllNews(){
        $db=Db::getConnection();
        $sql='SELECT * FROM `news` ORDER BY `date` DESC';
        $result=$db->query($sql);
        return $result->fetchAll();

    }

}