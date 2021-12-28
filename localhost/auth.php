<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

//$pass = md5($pass."forhktkntuhpi"); // Создаем хэш из пароля

$mysql = new mysqli('localhost', '7471_tvp', '7471_tvp', '7471_tvp');
//$mysqli = new mysqli($host, $login, $pass, $db);


$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
        $myrow = mysqli_fetch_array($result);
        if (empty($myrow['pass']))
        {
    //если пользователя с введенным логином не существует
        echo ("Извините, пользователя не существует.");
        }
        else{
   //если существует, то сверяем пароли
        if ($myrow[password_verify('pass',$pass)]) {
                header('Location: index_auth.php');
        }
else {
        echo "Ошибка входа";
        }
}
?>

