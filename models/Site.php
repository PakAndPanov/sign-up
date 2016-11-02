<?php

/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 31.10.2016
 * Time: 14:03
 */
class Site
{
    public static  function sendMessage($message){

        $db=Db::getConnection();
        $sql = 'INSERT INTO `messages`(`author_id`, `receiver_id`, `text`) '.'
        VALUES (:author_id,:receiver_id,:text)';
        $result = $db->prepare($sql);
        $result->bindParam(':author_id', $_SESSION['user']['id'], PDO::PARAM_STR);
        $result->bindParam(':receiver_id', $_SESSION['friend']['id'], PDO::PARAM_STR);
        $result->bindParam(':text', $message, PDO::PARAM_STR);
        $result->execute();
        $id=$db->lastInsertId();
        self::pushmessage($id);
        return $id;
    }
    public static function getMessageById($id){
        $db=Db::getConnection();
        $sql = 'SELECT `author_id`, `receiver_id`, `text`, `status` FROM `messages` WHERE id=:id AND (`author_id`=:author_id OR `receiver_id`=:receiver_id) ';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->bindParam(':author_id', $_SESSION['friend']['id'], PDO::PARAM_STR);
        $result->bindParam(':receiver_id', $_SESSION['friend']['id'], PDO::PARAM_STR);
        $result->execute();
        $message=$result->fetch();
        return $message;
    }
    private static function pushmessage($id){
        $db=Db::getConnection();
        $messagesforauthor=self::getAllMessages($_SESSION['user']['id']);
        $messagesforreceiver=self::getAllMessages($_SESSION['friend']['id']);
        $messagesforauthor[]=$id;
        $messagesforreceiver[]=$id;
        $strauthor=base64_encode(serialize($messagesforauthor));
        $strreceiver=base64_encode(serialize($messagesforreceiver));
        $sql='UPDATE `users` SET `messages`=:messages WHERE id=:id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $_SESSION['user']['id'], PDO::PARAM_STR);
        $result->bindParam(':messages', $strauthor, PDO::PARAM_STR);
        $result->execute();
        $sql='UPDATE `users` SET `messages`=:messages WHERE id=:id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $_SESSION['friend']['id'], PDO::PARAM_STR);
        $result->bindParam(':messages', $strreceiver, PDO::PARAM_STR);
        $result->execute();

    }
    public static function getAllMessages($id){
        $db=Db::getConnection();
        $messages=array();
        $sql='SELECT `messages` FROM `users` WHERE id=:id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->execute();
        $row=$result->fetch();
        $messages=unserialize(base64_decode($row["messages"]));
        return $messages;
    }

    public static function checkMessagesOfUser($id){
        $db=Db::getConnection();
        $messages=self::getAllMessages($id);
        foreach ($messages as $message) {
            $sql = "UPDATE `messages` SET `status`='1' WHERE `id`=:message AND `receiver_id`=:user_id AND `status`='0'";
            $result = $db->prepare($sql);
            $result->bindParam(':message', $message, PDO::PARAM_STR);
            $result->bindParam(':user_id', $id, PDO::PARAM_STR);
            $result->execute();
        }
    }

}