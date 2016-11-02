<?php

/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 30.10.2016
 * Time: 13:33
 */
class UserController
{
    public function actionLogin(){
        if(isset($_SESSION['user'])){
            header("Location: /site");
            return true;
        }
        
        if(isset($_POST['reg'])){
            header('Location: /user/register');
        }
        if(isset($_POST['auth'])){
            $email=htmlspecialchars($_POST['email']);
            $password=md5(htmlspecialchars($_POST['password']));
            
            if($id=User::checkUser($email,$password)){
                User::Logedin($id);
                header('Location: /site ');

            };
            
        }
        

        require_once ROOT.'/views/user/auth.php';
        return true;
    }
    public  function actionRegister(){
        $firstname="";
        $lastname="";
        $birthdate="";
        $city="";
        $gender="";
        $email="";
        $password="";
        $errors=false;
        if(isset($_POST['register'])){
            if(isset($_POST['firstname'])){
               if(User::checkName($_POST['firstname']))
                   $firstname=$_POST['firstname'];
                else $errors[]='Имя должно содержать более двух символов!';
                
            }
            if(isset($_POST['lastname'])){
                if(User::checkName($_POST['lastname']))
                    $lastname=$_POST['lastname'];
                else $errors[]='Фамилия должна содержать более двух символов!';

            }
            if(isset($_POST['email'])){
                if(!User::checkEmail($_POST['email']))
                    $errors[]='Неправильный email!';
                elseif (User::checkEmailExists(($_POST['email'])))
                    $errors[]='Аккаунт уже существует!';
                else $email=$_POST['email'];

            }
            if(isset($_POST['password'])){
                if(User::checkPassword($_POST['password']))
                    $password=$_POST['password'];
                else $errors[]='Пароль должен содержать более 6-ти символов!';

            }
            if(isset($_POST['city']) ) $city=$_POST['city'];
            if(isset($_POST['birthdate'])) $birthdate=$_POST['birthdate'];
            if(!$errors){
                $paramsreg=array('firstname'=>$firstname,'lastname'=>$lastname,'birthdate'=>$birthdate,'city'=>$city,'gender'=>$gender,'email'=>$email,'password'=>$password);
                if($id=User::register($paramsreg)) {
                    User::Logedin($id);
                    header('Location: /site');
                }

            }
        }

        
        require_once ROOT.'/views/user/reg.php';
        return true;
    }
    public function actionLogout(){
        User::Logout();
        true;
    }
}