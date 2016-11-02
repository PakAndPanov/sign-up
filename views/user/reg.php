<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SignUP</title>
    <meta name="description" content="SignUP" />
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" type="text/css" href="/template/css/style.css">
    <link rel="stylesheet" type="text/css" href="/template/css/reg.css">
    <link rel="stylesheet" type="text/css" href="/template/css/auth.css">
</head>
<body>
    <div class="regblock">
        <form action="" method="POST">
            <div class="cellinput">
            <a href="/" class="authbutton">Вход</a>
            <a href="/user/register" class="regbutton" style="background: #404040;">Регистрация</a>
            </div>
            <table>
                <tr>
                    <?php
                        if(!empty($errors) && is_array($errors))
                        foreach ($errors as $error){
                            echo $error.'<br>';
                        }
                    ?>
                </tr>
                <tr>
                    <td><input type="text" name="firstname" value="<?php echo $firstname;?>" placeholder="Имя" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="lastname" value="<?php echo $lastname;?>"placeholder="Фамилия" required></td>
                </tr>
                <tr>
                    <td><div class="birthdatereg"><p>Дата рождения:</p><input type="date" name="birthdate" max="2008-01-01" min="1950-01-01" name="date" value="<?php echo $birthdate;?>" placeholder="Дата рождения" required></div></td>
                </tr>
                <tr>
                    <td><input type="text" name="city" value="<?php echo $city;?>" placeholder="Город" required></td>
                </tr>
                <tr>
                    <td><input type="email" name="email" value="<?php echo $email;?>" placeholder="E-mail" required></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Пароль" required></td>
                </tr>
                <tr>
                    <td><div class="regbutton"><input type="submit" value="Создать аккаунт" name="register"></div></td>
                </tr>
            </table>
        </form>

    </div>
</body>
</html>