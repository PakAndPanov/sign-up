<?php

/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 30.10.2016
 * Time: 13:52
 */
class User
{   
    public static function checkName($name){
        if(strlen($name)<=2)return false;
        else return true;
    }
    public static function checkPassword($name){
        if(strlen($name)<=6)return false;
        else return true;
    }
    public static function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public static function checkEmailExists($email) {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM `users` WHERE `e-mail` = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
    }

    public static function checkUser($email,$password){
        $db = Db::getConnection();

        $sql = 'SELECT * FROM `users` WHERE `e-mail` = :email AND  `password`=:password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();
        if($row=$result->fetch()){
            return $row['id'];
        }
        else return false;

    }
    public static function Logedin($id=0){
        if($id!=0) {
            $user=self::getUserById($id);
            $_SESSION['user'] = $user;
            return true;
        }
        elseif(isset($_SESSION['user'])) return true;
        else return false;
    }

    public static function register($paramsreg){
        $db=Db::getConnection();
        $sql="INSERT INTO `users`(`firstname`, `lastname`, `birth_date`, `city`, `gender`, `e-mail`, `password`)"." 
              VALUES (:firstname,:lastname,:birthdate,:city,:gender,:email,:password)";
        $result = $db->prepare($sql);
        $result->bindParam(':firstname', $paramsreg['firstname'], PDO::PARAM_STR);
        $result->bindParam(':lastname', $paramsreg['lastname'], PDO::PARAM_STR);
        $time=strtotime($paramsreg['birthdate']);
        $result->bindParam(':birthdate',$time , PDO::PARAM_STR);
        $result->bindParam(':city', $paramsreg['city'], PDO::PARAM_STR);
        $gender=($paramsreg['gender']=='male')? 0 :1;
        $result->bindParam(':gender', $gender, PDO::PARAM_STR);
        $result->bindParam(':email', $paramsreg['email'], PDO::PARAM_STR);
        $password=md5($paramsreg['password']);
        $result->bindParam(':password',$password , PDO::PARAM_STR);
         $result->execute();
        return $db->lastInsertId();
        

    }

    public static  function getFriendsByUser($id){
        $db=Db::getConnection();
        $sql = 'SELECT friends FROM `users` WHERE id=:id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_STR);
        $result->execute();
        if($row=$result->fetch()){
            return unserialize(base64_decode($row['friends']));
        }
        else return false;

    }
    public static function getInfoFriends($arrfriends){
        $db=Db::getConnection();
        $friend=array();
        $i=0;
        foreach ($arrfriends as $arrfriend){
            $sql = 'SELECT * FROM `users` WHERE id=:id';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $arrfriend, PDO::PARAM_STR);
            $result->execute();

            $row=$result->fetch();
            $friend[$i]['firstname']=$row['firstname'];
            $friend[$i]['lastname']=$row['lastname'];
            $friend[$i]['birth_date']=$row['birth_date'];
            $friend[$i]['city']=$row['city'];
            $friend[$i]['gender']=$row['gender'];
            $friend[$i]['id']=$row['id'];


            $i++;
        }

        return $friend;
    }
    public static function Logout(){
        unset($_SESSION['user']);
        unset($_SESSION['friend']);
        header("Location: /");
    }

    public static function getUserById($id){
        $db=Db::getConnection();

            $sql = 'SELECT * FROM `users` WHERE id=:id';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_STR);
            $result->execute();
            if($row=$result->fetch()) {
                $user['firstname'] = $row['firstname'];
                $user['lastname'] = $row['lastname'];
                $user['birth_date'] = $row['birth_date'];
                $user['city'] = $row['city'];
                $user['gender'] = $row['gender'];
                $user['id'] = $row['id'];
                return $user;
            }
            else return false;


    }
    public static function getFriendsByName($searchtext){
        $db=Db::getConnection();
        $sql = 'SELECT * FROM `users` WHERE (`firstname` LIKE :searchtext) OR (`lastname` LIKE :searchtext)';
        $result = $db->prepare($sql);
        $searchtext=$searchtext.'%';
        $result->bindParam(':searchtext', $searchtext, PDO::PARAM_STR);
        $result->execute();
        $users=$result->fetchAll();
        return $users;

    }

    public static function addUserToFriend($id){
        $db=Db::getConnection();
        $friends=self::getFriendsByUser($_SESSION['user']['id']);

        if(!in_array($id,$friends)) {
            $friends[] = $id;
            $strfriend = base64_encode(serialize($friends));
            $sql = 'UPDATE `users` SET `friends`=:strfriend';
            $result = $db->prepare($sql);
            $result->bindParam(':strfriend', $strfriend, PDO::PARAM_STR);
            return $result->execute();
        }
        return false;
    }



}
