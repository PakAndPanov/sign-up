<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>SignUP</title>
    <meta name="description" content="SignUP" />
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" type="text/css" href="/template/css/style.css">
    <link rel="stylesheet" type="text/css" href="/template/css/auth.css">
</head>
<body>
    <div class="authblock">
        <form action="" method="POST">
            <div class="cellinput">
                <a href="/" class="authbutton" style="background: #404040;">Вход</a>
                <a href="/user/register" class="regbutton">Регистрация</a>
            </div>
            <table>
                <tr>
                    <td><input type="text" name="email" placeholder="Введите E-mail"></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" placeholder="Введите пароль"></td>
                </tr>
                <tr>
                    <td><input type="checkbox" checked>Запомнить меня</td>
                </tr>
                <tr>
                    <td><div class="buttonentry"><input type="submit" value="Войти" name="auth"></div></td>
                </tr>

            </table>
        </form>
    </div>
</body>
</html>