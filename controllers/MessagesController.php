<?php

/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 01.11.2016
 * Time: 0:46
 */
class MessagesController
{

    public static function actionIndex(){
        if(!User::Logedin()) {header("Location:/");exit();};

        if(isset($_POST['submit'])){
            $friendid=$_POST['friend'];
            $friend=User::getUserById($friendid);
            $_SESSION['friend']=$friend;
            header('Location:/messages');
        }
        if(isset($_POST['send'])){
            $message=$_POST['message'];
            $id=Messages::sendMessage($message);
            header('Location:/messages');
        }
        if(isset($_SESSION['friend'])) {
            $friend = $_SESSION['friend'];
            $idmessages = Messages::getAllMessages($_SESSION['user']['id']);
            $messages = array();
            if (!empty($idmessages)) {
                $i=0;
                foreach ($idmessages as $message) {

                    $temp=Messages::getMessageById($message);
                    if($temp) {
                        $messages[$i]['message'] = $temp;
                        $messages[$i]['author'] = User::getUserById($temp['author_id']);
                    }
                    $i++;
                }
            }

        }
        if(isset($_SESSION['unreadmsg']) && count($_SESSION['unreadmsg'])!=0){
            $unreadmsg=$_SESSION['unreadmsg'];
            foreach ($unreadmsg as $i=>$msg)
            $author[$i]=User::getUserById($msg['author_id']);
            $friend=array();
            if(isset($_SESSION['friend'])) $friend=$_SESSION['friend'];
        }

        $strfriends=User::getFriendsByUser($_SESSION['user']['id']);
        if($strfriends){
            $arrfriends= $strfriends;
            $friends=User::getInfoFriends($arrfriends);
        }
        
        require_once ROOT.'/views/messages/messages.php';
        return true;
    }
    
    public static  function actionUnreadenMsg(){
        if(!User::Logedin()) {header("Location:/");exit();};

        $unreadmsg=Messages::getUnreadenMessages();

        $count=count($unreadmsg);
        echo $count;
        return true;
    }

    public function actionRefresh(){
        if(!User::Logedin()) {header("Location:/");exit();};
        if(isset($_SESSION['friend']) && !empty($_SESSION['friend'])) {
            $idmessages = Messages::getAllMessages($_SESSION['user']['id']);
            $messages = array();
            if (!empty($idmessages)) {
                $i = 0;
                foreach ($idmessages as $message) {

                    $temp = Messages::getMessageById($message);
                    if ($temp && $temp['status'] == '0' && $temp['receiver_id'] == $_SESSION['user']['id']) {
                        $messages[$i]['message'] = $temp;
                        $messages[$i]['author'] = User::getUserById($temp['author_id']);
                        if (isset($_POST['from']) && $_POST['from'] == 'message')
                            Messages::checkMessagesOfUser($_SESSION['user']['id']);
                    }
                    $i++;
                }
            }

            if (!empty($messages) && is_array($messages))
                foreach ($messages as $message):
echo '<p><div class="messageauthor">'.$message['author']['firstname'].'</div><div class="messagetext">'. $message['message']['text'].'</div></p>';

endforeach;
        }
        return true;
    }

    public function actionCheck(){
        if(!User::Logedin()) {header("Location:/");exit();};
        if(isset($_SESSION['friend']))
        Messages::checkMessagesOfUser();
        return true;
    }



}